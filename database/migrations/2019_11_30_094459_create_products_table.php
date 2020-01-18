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
      if(!Schema::hasTable('products')){
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_row_id');
            $table->string('products_name');
            $table->double('products_price');
            $table->string('products_height')->nullable();
            $table->string('products_width')->nullable();
            $table->string('products_weight')->nullable();
            $table->string('products_sku');
            $table->string('products_image')->nullable();
            $table->string('products_description')->nullable();
            $table->tinyInteger('products_rating')->default(0);
            $table->tinyInteger('is_latest')->default(0);
            $table->tinyInteger('is_fretured')->default(0);
            $table->timestamps();
        });
       }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users=products');
    }
}
