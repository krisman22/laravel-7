<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'table_barang';

    protected $fillable = ['kode_kelompok_barang', 'uraian_kelompok_barang', 'id_standar_harga', 'kode_barang', 'uraian_barang', 'spesifikasi', 'satuan', 'harga_satuan'];
}
