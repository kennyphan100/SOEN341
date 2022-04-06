<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->id()->primary();
            $table->timestamps();
            //$table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');;
            //$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');;
            $table->integer('product_quantity', 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
