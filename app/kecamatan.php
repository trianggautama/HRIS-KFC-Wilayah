<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    protected $table ='kecamatans';
    protected $fillable = [
        'kode_kecamatan','kecamatan','kabupatenkota_id',
    ];
    
    public function kabupatenkota(){
        return $this->belongsTo('App\kabupatenkota');
    }

    public function kelurahan(){
       return $this->hasMany('App\Kelurahan','kecamatan_id');
    }  

}
