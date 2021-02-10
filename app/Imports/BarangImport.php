<?php

namespace App\Imports;

use App\Barang;
use Maatwebsite\Excel\Concerns\ToModel;

class BarangImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Barang([
            'kode_kelompok_barang' => $row[0],
            'uraian_kelompok_barang' => $row[1],
            'id_standar_harga' => $row[2],
            'kode_barang' => $row[3],
            'uraian_barang' => $row[4],
            'spesifikasi' => $row[5],
            'satuan' => $row[6],
            'harga_satuan' => $row[7],
        ]);
    }
}
