<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table ='karyawans';
    protected $fillable = [
        'kode_karyawan','nama','jenis_kelamin','telepon','outlet_id','jabatan_id',
    ];
    
    public function outlet(){
        return $this->belongsTo('App\Outlet');
    }

    public function jabatan(){
        return $this->belongsTo('App\Jabatan');
    }
    public function raport_karyawan(){
        return $this->hasMany('App\raport_karyawan');
    }
}
