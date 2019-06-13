<?php

namespace App\Http\Controllers;

use App\User;
use App\Outlet;

use Hash;
use IDCrypt;

use Illuminate\Http\Request;

class adminController extends Controller
{

    public function index(){

        return view('admin.index');
    }

    //Outlet
    public function outlet_index(){
        $Outlet = Outlet::all();
        $User = User::all();
        return view('admin.outlet_data',compact('Outlet','User'));
    }

    public function outlet_detail($id){
        $id = IDCrypt::Decrypt($id);
        $Outlet = Outlet::findOrFail($id);
        $User = User::find($Outlet->id_user);
        // dd($User);
        return view('admin.outlet_detail',compact('Outlet','User'));
    }

    public function outlet_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $Outlet = Outlet::findOrFail($id);
        $User = User::find($Outlet->id_user);

        //  $this->validate(request(),[
        //     'kode_rambu'=>'required',
        //     'nama_rambu'=>'required',
        //     'keterangan'=>'required'
        // ]);
        $User->name     = $request->name;
        $User->email    = $request->email;
        $Password       = Hash::make($request->password);
        $User->password = $Password;
        
        if($request->gambar != null){
        $FotoExt  = $request->gambar->getClientOriginalExtension();
        $FotoName = $request->id_user.' - '.$request->name;
        $gambar   = $FotoName.'.'.$FotoExt;
        $request->gambar->move('images/outlet', $gambar);
        $Outlet->gambar       = $gambar;
        }

        $kecamatan = 1;
        $Outlet->id_kecamatan = $kecamatan;
        $Outlet->alamat       = $request->alamat;
        $Outlet->telepon      = $request->telepon;

        $User->update();
        $Outlet->update();
        return redirect(route('outlet_index'))->with('success', 'Data outlet '.$request->name.' Berhasil di ubah');
         }

      //kabupatenkota
      public function kabupatenkota_index(){

        return view('admin.kabupatenkota_data');
    }

    public function kabupatenkota_edit(){

        return view('admin.kabupatenkota_edit');
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
