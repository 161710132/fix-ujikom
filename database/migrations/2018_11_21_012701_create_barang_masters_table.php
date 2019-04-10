<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_masters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->enum('jenis_barang',['Sayuran','Buah-Buahan']);
            $table->enum('satuan',['Kilogram','Ikat']);
            $table->integer('quantity')->nullable();
            $table->integer('harga_barang')->nullable();
            $table->string('total')->nullable();;
            $table->integer('harga_jual');
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
        Schema::drop('barang_masters');
    }
}
