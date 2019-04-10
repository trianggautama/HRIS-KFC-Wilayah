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
    return view('welcome');
});

//admin wilayah
Route::get('/admin','adminController@index')->name('admin_index');

//Outlet
Route::get('/outlet','adminController@outlet_index')->name('outlet_index');

//jabatan
Route::get('/jabatan','adminController@jabatan_index')->name('jabatan_index');

//karyawan
Route::get('/karyawan','adminController@karyawan_index')->name('karyawan_index');
Route::get('/karyawan_detail','adminController@karyawan_detail')->name('karyawan_detail');

