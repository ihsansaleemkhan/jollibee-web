<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_master', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customerID');
            $table->integer('productID');
            $table->double('price');
            $table->double('salePrice');
            $table->integer('quantity');
            $table->integer('sizeID');
            $table->integer('priceAddSize');
            $table->integer('typeID');
            $table->integer('priceAddType');
            $table->double('discount');
            $table->double('total');
            $table->integer('abandonStatus');
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
        Schema::dropIfExists('cart_master');
    }
}
