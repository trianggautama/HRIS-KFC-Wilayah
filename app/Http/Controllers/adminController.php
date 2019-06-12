<?php

namespace App\Http\Controllers;

use App\User;
use App\Outlet;

use IDCrypt;

use Illuminate\Http\Request;

class adminController extends Controller
{

    public function index(){

        return view('admin.index');
    }

    //Outlet
    public function outlet_index(){
        $Outlet = Outlet::All();
        // dd($Outlet);
        return view('admin.outlet_data',compact('Outlet'));
    }

    public function outlet_detail($id){
        $id = IDCrypt::Decrypt($id);
        $Outlet = Outlet::findOrFail($id);
        $User = User::find($Outlet->id_user);
        dd($User);
        return view('admin.outlet_detail',compact('Outlet','User'));
    }

     //kecamatan
     public function kecamatan_index(){

        return view('admin.kecamatan_data');
    }

    public function kecamatan_edit(){

        return view('admin.kecamatan_edit');
    }

    //kelurahan
    public function kelurahan_index(){

    return view('admin.kelurahan_data');
    }
    public function kelurahan_edit(){

        return view('admin.kelurahan_edit');
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
