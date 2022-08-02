<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->integer('price');
            $table->integer('discounted_price')->default(0);
            $table->timestamps();
            $table->string('category')->nullable();
            $table->string('subcategory')->nullable();
            $table->integer('featured')->nullable()->default(0);
            $table->string('trademark')->default('sin marca');
            $table->integer('stock')->default(100);
            $table->integer('sales')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
