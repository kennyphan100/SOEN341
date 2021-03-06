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
            $table->id();
            $table->timestamps();
            
            // $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreignId('order_id')->constrained('orders');

            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products');

            $table->integer('product_quantity', false)->length(3);
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
