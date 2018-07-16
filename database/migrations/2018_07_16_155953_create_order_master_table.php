<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_master', function (Blueprint $table) {
            $table->increments('orderID');
            $table->integer('customerID');
            $table->integer('orderNo');
            $table->integer('paymentID');
            $table->date('orderDate');
            $table->time('orderTime');
            $table->integer('orderStatus');
            $table->string('errorLog');
            $table->string('errorMsg');
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
        Schema::dropIfExists('order_master');
    }
}
