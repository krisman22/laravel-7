<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

use Session;

use App\Imports\BarangImport;
use App\Exports\BarangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barang.barang', ['barang' => $barang]);
    }

    public function export_excel()
	{
		return Excel::download(new BarangExport, 'barang.xlsx');
	}

    public function import_barang(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_barang',$nama_file);
 
		// import data
		Excel::import(new BarangImport, public_path('/file_barang/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Barang Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/barang');
	}
}
