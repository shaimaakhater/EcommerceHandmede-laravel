<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
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
            $table->unsinedIntger('caregory_id');
            $table->unsinedIntger('brand_id');
            $table->unsinedIntger('user_id');
            $table->string('name');
            $table->string('name'); 
            $table->string('slug');
            $table->double('price');
            $table->double('original_price')->nullable();
            $table->text('details');
            $table->text('seo-desc')->nullable();
            $table->text('seo-keys')->nullable();

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
        Schema::dropIfExists('categories');
    }
}
