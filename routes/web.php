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
    return redirect()->to('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//surat Keluar
Route::get('/suratkeluar', 'SuratKeluarController@index');
Route::get('/suratkeluar/hapus/{id}', 'SuratKeluarController@destroy');
Route::get('/suratkeluar/tambah', 'SuratKeluarController@create');
Route::post('/suratkeluar/simpan', 'SuratKeluarController@store');
Route::get('/suratkeluar/edit/{id}', 'SuratKeluarController@edit');
Route::get('/suratkeluar/cari', 'SuratKeluarController@show');
