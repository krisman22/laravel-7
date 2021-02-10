<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'HomeController@testing')->name('user');
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/cetak_pdf', 'PegawaiController@cetak_pdf');
Route::get('/barang', 'BarangController@index');
Route::get('/barang/export_excel', 'BarangController@export_excel');
Route::post('/barang/import_barang', 'BarangController@import_barang');
Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/export_excel', 'SiswaController@export_excel');
Route::post('/siswa/import_excel', 'SiswaController@import_excel');

Auth::routes();