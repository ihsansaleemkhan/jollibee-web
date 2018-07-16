<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressBookMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_book_master', function (Blueprint $table) {
            $table->increments('addressID');
            $table->string('defaultAddress');
            $table->string('unitNo');
            $table->string('building');
            $table->string('street');
            $table->integer('areaID');
            $table->integer('cityID');
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
        Schema::dropIfExists('address_book_master');
    }
}
