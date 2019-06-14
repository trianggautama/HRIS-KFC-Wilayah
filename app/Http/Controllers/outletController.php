<?php

namespace App\Http\Controllers;

use App\Outlet;
use App\Karyawan;
use Hash;
use IDCrypt;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class outletController extends Controller
{

    public function index(){
        $id = auth::id();
        // dd($id);
        $Outlet  = Outlet::where('user_id', $id)->get();

        return view('outlet.index',compact('Outlet','id'));
    }

    public function profil_edit($id){
        $id = IDCrypt::Decrypt($id);
        $Outlet = Outlet::findOrFail($id);
        dd($Outlet);
        return view('outlet.profil_edit',compact('Outlet'));
    }//fungsi outlet edit
    // public function edit_profil(){

    //     return view('outlet.edit_profil');
    // }

    public function karyawan_data(){

        return view('outlet.karyawan_data');
    }

    public function karyawan_detail(){

        return view('outlet.karyawan_detail');
    }
}
