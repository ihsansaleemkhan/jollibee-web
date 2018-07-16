<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_master', function (Blueprint $table) {
            $table->increments('productID');
            $table->string('name');
            $table->string('image');
            $table->text('description');
            $table->double('price');
            $table->double('sale_price');
            $table->integer('sizeID');
            $table->integer('typeID');
            $table->integer('categoryID');
            $table->integer('addon_productID');
            $table->integer('status');
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
        Schema::dropIfExists('product_master');
    }
}
