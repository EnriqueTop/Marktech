<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('discounted_price')->default(0);
            $table->integer('total')->default(0);
            $table->unsignedBigInteger('order_id')->index('items_order_id_foreign');
            $table->unsignedBigInteger('product_id')->index('items_product_id_foreign');
            $table->timestamps();
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
