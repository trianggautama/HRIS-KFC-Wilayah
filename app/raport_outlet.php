<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class raport_outlet extends Model
{
    public function outlet(){
        return $this->belongsTo('App\Outlet');
    }

}
