<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_masuks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_barang');
            $table->foreign('id_barang')->references('id')->on('barang_masters')->onDelete('CASCADE');
            $table->integer('quantity');
            $table->integer('harga_barang');
            $table->string('total');
            $table->unsignedInteger('id_karyawan');
            $table->foreign('id_karyawan')->references('id')->on('users')->onDelete('CASCADE');
            $table->unsignedInteger('id_supplier');
            $table->foreign('id_supplier')->references('id')->on('suppliers')->onDelete('CASCADE');
            
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
        Schema::drop('barang_masuks');
    }
}
