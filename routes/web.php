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

Route::group(['middleware' => 'admin'], function() {
//admin wilayah
Route::get('/admin','adminController@index')
->name('admin_index');

//Outlet
Route::get('/outlet','adminController@outlet_index')
->name('outlet_index');
Route::get('/outlet/detail/{id}','adminController@outlet_detail')
->name('outlet_detail');
Route::put('/outlet/detail/{id}','adminController@outlet_update')
->name('outlet_update');

//kecamatan
Route::get('/kecamatan','adminController@kecamatan_index')->name('kecamatan_index');
Route::get('/kecamatan_edit','adminController@kecamatan_edit')->name('kecamatan_edit');


//kecamatan
Route::get('/kelurahan','adminController@kelurahan_index')->name('kelurahan_index');
Route::get('/kelurahan_edit','adminController@kelurahan_edit')->name('kelurahan_edit');

//jabatan
Route::get('/jabatan','adminController@jabatan_index')->name('jabatan_index');

//karyawan
Route::get('/karyawan','adminController@karyawan_index')->name('karyawan_index');
Route::get('/karyawan_detail','adminController@karyawan_detail')->name('karyawan_detail');
//MIDLEWARE ADMIN
});

//HALAMAN OUTLET
Route::get('/admin_outlet','outletController@index')->name('admin_outlet_index');
Route::get('/edit_profil','outletController@edit_profil')->name('edit_profil_outlet');
Route::get('/karyawan_outlet_data','outletController@karyawan_data')->name('karyawan_outlet_data');
Route::get('/karyawan_outlet_detail','outletController@karyawan_detail')->name('karyawan_outlet_detail');

Auth::routes();

Route::get('/home', 'dashboardController@index')
->name('home');
