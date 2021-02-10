<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_kelompok_barang');
            $table->string('uraian_kelompok_barang');
            $table->string('id_standar_harga');
            $table->string('kode_barang');
            $table->string('uraian_barang');
            $table->string('spesifikasi');
            $table->string('satuan');
            $table->string('harga_satuan');
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
        Schema::dropIfExists('table_barang');
    }
}
