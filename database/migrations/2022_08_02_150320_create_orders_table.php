<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('total')->nullable()->default(0);
            $table->unsignedBigInteger('user_id')->nullable()->index('orders_user_id_foreign');
            $table->timestamps();
            $table->string('paid', 11)->nullable()->default('No Pagado');
            $table->string('address')->nullable();
            $table->string('status')->default('Preparando Pedido');
            $table->string('canceled_restored')->default('No');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
