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
            $table->bigIncrements('id');
            $table->unsignedInteger('subcategory_id');
            $table->timestamps();
            $table->string('ua_name');
            $table->string('ru_name');
            $table->string('en_name');
            $table->string('ua_description');
            $table->string('ru_description');
            $table->string('en_description');
            $table->double('price');
            $table->text('main_img');
            $table->text('images');
            $table->foreign('subcategory_id')->references('id')->on('equipment_subcategories')->onDelete('cascade');
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
