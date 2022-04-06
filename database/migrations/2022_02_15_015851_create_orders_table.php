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
            $table->id()->primary();
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('shipping_address', 144);
            $table->string('postal_code', 7);
            $table->string('credit_card_number', 19);
            $table->string('name_on_card', 144);
            $table->integer('cc_security_code', 3);
            $table->string('order_total', 10);
            $table->string('cancelled', 5);
            $table->string('city', 144);
            $table->timestamps();
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
