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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id')->unsigned();
            $table->integer('product_category_id')->unsigned();
            $table->string('name_product');
            $table->string('image_product');
            $table->text('description')->nullable();
            $table->text('cate');
            $table->double('price');
            $table->double('discount_code')->nullable();
            $table->double('amount')->nullable();
            $table->double('weight')->nullable();
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
