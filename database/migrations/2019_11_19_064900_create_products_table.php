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
            $table->integer('caregory_id');
            $table->integer('brand_id');
            $table->integer('user_id');
            $table->string('name'); 
            $table->string('image'); 
            $table->string('slug');
            $table->double('price');
            $table->double('original_price')->nullable();
            $table->text('details');
            $table->text('seo-desc')->nullable();
            $table->text('seo-keys')->nullable();
            $table->timestamps();
        });

        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('qty');
            $table->timestamps();
    });

        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->double('total_price');
            $table->integer('address')->nullable();
            $table->timestamps();
    });

        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('product_id');
            $table->string('product');
            $table->string('image')->nullable();
            $table->double('price');
            $table->integer('qty');
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
        Schema::dropIfExists('order_details');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('stocks');
        Schema::dropIfExists('products');
    }
}
