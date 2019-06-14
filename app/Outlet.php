<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
      }

    public function kecamatan(){
        return $this->belongsTo('App\Kecamatan', 'kecamatan_id');
      }  
      
}
