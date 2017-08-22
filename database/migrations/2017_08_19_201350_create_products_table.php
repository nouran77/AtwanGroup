<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name_english');
            $table->string('name_arabic');
            $table->text('description_english');
            $table->text('description_arabic');
            $table->string('image');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('subcategory_id')->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->integer('sub_subcategory_id')->unsigned()->nullable();
            $table->foreign('sub_subcategory_id')->references('id')->on('sub_sub_categories')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
