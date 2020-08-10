<?php

use Illuminate\Support\Facades\Route;
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
    return view('index');
});

Route::get('/proyek', 'ProjectsController@index'); //menampilkan tabel berisi data proyek-proyek
Route::get('/proyek/create', 'ItemController@create'); // menampilkan form untuk membuat data proyek baru, di dalam form tersebut terdapat input pengisian data-data proyek dan penunjukkan manager
Route::post('/proyek', 'ItemController@store'); // menyimpan proyek baru
Route::get('/proyek/{id}/daftarkan-staff', 'ItemController@index'); // menampilkan halaman form untuk mendaftarkan staff baru dari data karyawan
Route::post('/proyek/{id}/daftarkan-staff', 'ItemController@index'); // menyimpan data proyek yang sudah ditambahkan dengan staff-staff baru di halaman form daftarkan-staff
Route::get('/proyek/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit data-data proyek
Route::put('/proyek/{id}', 'ItemController@update'); // menyimpan data proyek yang sudah diedit melalui form edit proyek
Route::delete('/proyek/{id}', 'ItemController@destroy'); // menghapus data dengan id tertentu
Route::get('/karyawan', 'EmployeessController@index'); //menampilkan tabel berisi data karyawan
Route::get('/karyawan/{id_karyawan}/daftar-proyek', 'EmployeesController@show'); //menampilkan data list proyek dimana saja karyawan tersebut terdaftar sebagai staff atau manager
