<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{

    public function index(){

        return view('admin.index');
    }

    //Outlet
    public function outlet_index(){

        return view('admin.outlet_data');
    }

    public function outlet_detail(){

        return view('admin.outlet_detail');
    }

     //kecam[atan]
     public function kecamatan_index(){

        return view('admin.kecamatan_data');
    }

     //jabatan
     public function jabatan_index(){

        return view('admin.jabatan_data');
    }

        //karyawan
        public function karyawan_index(){

            return view('admin.karyawan_data');
        }

        public function karyawan_detail(){

            return view('admin.karyawan_detail');
        }


}
