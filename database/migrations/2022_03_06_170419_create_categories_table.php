<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('category_name');
        });

        DB::table('categories')->insert(
            [
                ['category_name' => 'Books'],
                ['category_name' => 'Electronics'],
                ['category_name' => 'Jewellery & Watches'],
                ['category_name' => 'Health & Beauty'],
                ['category_name' => 'Sporting Goods'],
                ['category_name' => 'Clothing'],
                ['category_name' => 'Grocery'],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
