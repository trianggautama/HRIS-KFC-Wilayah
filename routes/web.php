<?php
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
Route::get('/outlet/hapus/{id}','adminController@outlet_hapus')
->name('outlet_hapus');
Route::get('outlet/keseluruhan/cetak','adminController@cetak_outlet_keseluruhan')
->name('cetak_outlet_keseluruhan');

//kabupaten / kota
Route::get('/kabupatenkota','adminController@kabupatenkota_index')
->name('kabupatenkota_index');
Route::post('/kabupatenkota','adminController@kabupatenkota_tambah')
->name('kabupatenkota_tambah');
Route::get('/kabupatenkota/edit/{id}','adminController@kabupatenkota_edit')
->name('kabupatenkota_edit');
Route::put('/kabupatenkota/edit/{id}','adminController@kabupatenkota_update')
->name('kabupatenkota_update');
Route::get('/kabupatenkota/hapus/{id}','adminController@kabupatenkota_hapus')
->name('kabupatenkota_hapus');


//kecamatan
Route::get('/kecamatan','adminController@kecamatan_index')
->name('kecamatan_index');
Route::post('/kecamatan','adminController@kecamatan_tambah')
->name('kecamatan_tambah');
Route::get('/kecamatan/detail/','adminController@kecamatan_detail')
->name('kecamatan_detail');
Route::get('/kecamatan/edit/{id}','adminController@kecamatan_edit')
->name('kecamatan_edit');
Route::put('/kecamatan/edit/{id}','adminController@kecamatan_update')
->name('kecamatan_update');
Route::get('/kecamatan/hapus/{id}','adminController@kecamatan_hapus'
)->name('kecamatan_hapus');

//kelurahan
Route::get('/kelurahan','adminController@kelurahan_index')
->name('kelurahan_index');
Route::post('/kelurahan','adminController@kelurahan_tambah')
->name('kelurahan_tambah');
Route::get('/kelurahan/detail/','adminController@kelurahan_detail')
->name('kelurahan_detail');
Route::get('/kelurahan/edit/{id}','adminController@kelurahan_edit')
->name('kelurahan_edit');
Route::put('/kelurahan/edit/{id}','adminController@kelurahan_update')
->name('kelurahan_update');
Route::get('/kelurahan/hapus/{id}','adminController@kelurahan_hapus')
->name('kelurahan_hapus');

//jabatan
Route::get('/jabatan','adminController@jabatan_index')
->name('jabatan_index');
Route::post('/jabatan','adminController@jabatan_tambah')
->name('jabatan_tambah');
Route::get('/jabatan/detail/{id}','adminController@jabatan_detail')
->name('jabatan_detail');
Route::get('/jabatan/edit/{id}','adminController@jabatan_edit')
->name('jabatan_edit');
Route::put('/jabatan/edit/{id}','adminController@jabatan_update')
->name('jabatan_update');
Route::get('/jabatan/hapus/{id}','adminController@jabatan_hapus')
->name('jabatan_hapus');

//karyawan
Route::get('/karyawan','adminController@karyawan_index')
->name('karyawan_index');
Route::get('/karyawan/admin/detail/{id}','adminController@karyawan_detail')
->name('karyawan_admin_detail');

//Object Penilaian
Route::get('/object_penilaian','adminController@object_penilaian_index')
->name('object_penilaian_index');
Route::post('/object_penilaian','adminController@object_penilaian_tambah')
->name('object_penilaian_tambah');
Route::get('/object_penilaian/edit/{id}','adminController@object_penilaian_edit')
->name('object_penilaian_edit');
Route::put('/object_penilaian/edit/{id}','adminController@object_penilaian_update')
->name('object_penilaian_update');
Route::get('/object_penilaian/hapus/{id}','adminController@object_penilaian_hapus')
->name('object_penilaian_hapus');

//penilaian Outlet
Route::get('/penilaian_outlet','adminController@penilaian_outlet_index')
->name('penilaian_outlet_index');
Route::get('/penilaian_outlet/tambah','adminController@penilaian_outlet_tambah')
->name('penilaian_outlet_tambah');
Route::post('/penilaian_outlet/tambah','adminController@penilaian_outlet_store')
->name('penilaian_outlet_store');
Route::get('/penilaian_outlet/filter/periode','adminController@penilaian_outlet_filter_periode')
->name('penilaian_outlet_filter_periode');
Route::get('/penilaian_outlet/filter/outlet','adminController@penilaian_outlet_filter_outlet')
->name('penilaian_outlet_filter_outlet');
Route::get('/penilaian_outlet/hapus/{id}','adminController@penilaian_outlet_hapus')
->name('penilaian_outlet_hapus');

//penilaian karyawan
Route::get('/penilaian_karyawan','adminController@penilaian_karyawan_index')
->name('penilaian_karyawan_index');

//MIDLEWARE ADMIN
});

//HALAMAN OUTLET
Route::get('/admin_outlet','outletController@index')
->name('admin_outlet_index');
Route::get('/admin_outlet/tambah','outletController@outlet_tambah')
->name('admin_outlet_tambah');
Route::post('/admin_outlet/tambah','outletController@outlet_tambah_store')
->name('admin_outlet_tambah');
Route::put('/profil/edit/{id}','outletController@outlet_update')
->name('admin_outlet_update');


Route::get('/karyawan_outlet_data','outletController@karyawan_data')
->name('karyawan_outlet_data');
Route::post('/karyawan_outlet_data','outletController@karyawan_store')
->name('karyawan_outlet_store');
Route::get('/karyawan/detail/{id}','outletController@karyawan_detail')
->name('karyawan_outlet_detail');
Route::get('/karyawan/hapus/{id}','outletController@karyawan_hapus')
->name('karyawan_outlet_hapus');

Route::get('outlet/penilaian_outlet','outletController@penilaian_outlet_index')
->name('outlet_penilaian_outlet_index');

Route::get('outlet/penilaian_karyawan','outletController@penilaian_karyawan_index')
->name('outlet_penilaian_karyawan_index');
Route::get('outlet/penilaian_karyawan/tambah','outletController@penilaian_karyawan_tambah')
->name('outlet_penilaian_karyawan_tambah');
Route::post('outlet/penilaian_karyawan/tambah','outletController@penilaian_karyawan_store')
->name('outlet_penilaian_karyawan_store');
Route::get('/penilaian_karyawan/outlet/hapus/{id}','outletController@penilaian_karyawan_hapus')
->name('penilaian_karyawan_outlet_hapus');

Auth::routes();

Route::get('/home', 'dashboardController@index')
->name('home');
