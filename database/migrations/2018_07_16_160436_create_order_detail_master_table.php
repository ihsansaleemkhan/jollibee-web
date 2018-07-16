<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail_master', function (Blueprint $table) {
            $table->increments('orderDetailID');
            $table->integer('orderID');
            $table->integer('productID');
            $table->integer('orderNo');
            $table->double('price');
            $table->double('salePrice');
            $table->integer('quantity');
            $table->integer('sizeID');
            $table->integer('priceAddSize');
            $table->integer('typeID');
            $table->integer('priceAddType');
            $table->double('discount');
            $table->double('vat');
            $table->double('total');
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
        Schema::dropIfExists('order_detail_master');
    }
}
