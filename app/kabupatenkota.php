<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kabupatenkota extends Model
{
    
    protected $table ='kabupatenkota';
    protected $fillable = [
        'kode_kabupaten','kabupatenkota',
    ];
    
    // public function kecamatan(){
    //     return $this->hasMany('App\kecamatan');
    //   }

}
