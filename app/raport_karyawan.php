<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class raport_karyawan extends Model
{
    public function karyawan(){
        return $this->belongsTo('App\Karyawan');
    }
}
