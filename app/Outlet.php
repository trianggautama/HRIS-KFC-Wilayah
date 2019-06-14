<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'id_user');
      }

    public function kecamatan(){
        return $this->belongsTo('App\Kecamatan', 'id_kecamatan');
      }  
      
}
