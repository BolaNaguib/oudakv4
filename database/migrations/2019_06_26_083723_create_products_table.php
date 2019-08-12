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
            $table->string('thumbnail');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->integer('price');
            $table->integer('quantity');
            $table->text('initial_description');
            $table->text('main_description');
            $table->string('category');
            $table->string('serial_number');
            $table->string('gifting_option');
            $table->string('authentication_number');
            $table->string('warranty');
            $table->string('weight');
            $table->string('store');
            $table->string('volume');
            $table->string('olfactory');
            $table->string('top_notes');
            $table->string('heart_notes');
            $table->string('base_notes');    
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
