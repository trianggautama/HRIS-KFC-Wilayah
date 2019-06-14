<?php

namespace App\Http\Controllers;
use App\User;
use App\Outlet;
use App\kabupatenkota;
use App\kecamatan;
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
         }//fungsi edit data outlet

    public function outlet_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $Outlet=Outlet::findOrFail($id);
        $Outlet->user()->delete();
        $Outlet->delete();
       
        return redirect(route('outlet_index'))->with('success', 'Data outlet berhasil di hapus');
    }//fungsi menghapus data outlet

      //kabupatenkota
      public function kabupatenkota_index(){
        $kabupatenkota = kabupatenkota::all();

        return view('admin.kabupatenkota_data',compact('kabupatenkota'));
      }
    
    public function kabupatenkota_tambah(Request $request){
        //  dd($request);
          $this->validate(request(),[
              'kode_kabupatenkota'=>'required|unique:kabupatenkota',
              'kabupatenkota'=>'required'
            ]);
            $kabupatenkota = new kabupatenkota;
            $kabupatenkota->kode_kabupatenkota= $request->kode_kabupatenkota;
            $kabupatenkota->kabupatenkota= $request->kabupatenkota;
            $kabupatenkota->save();
              return redirect(route('kabupatenkota_index'))->with('success', 'Data kabupaten / kota '.$request->kabupatenkota.' Berhasil di Simpan');
      }

    public function kabupatenkota_edit($id){
        $id = IDCrypt::Decrypt($id);
        $kabupatenkota=kabupatenkota::findOrFail($id);
        return view('admin.kabupatenkota_edit',compact('kabupatenkota'));
    }
    
    public function kabupatenkota_update( Request $request ,$id){
       // dd('utes');
        $id = IDCrypt::Decrypt($id);
        $kabupatenkota = kabupatenkota::findOrFail($id);
       // dd($request);
       $this->validate(request(),[
        'kode_kabupatenkota'=>'required|unique:kabupatenkota',
        'kabupatenkota'=>'required'
      ]);
           $kabupatenkota->kode_kabupatenkota= $request->kode_kabupatenkota;
           $kabupatenkota->kabupatenkota= $request->kabupatenkota;
           $kabupatenkota->update();
             return redirect(route('kabupatenkota_index'))->with('success', 'Data  Berhasil di Ubah');
     }

    public function kabupatenkota_hapus($id){
        $id = IDCrypt::Decrypt($id);
            $kabupatenkota=kabupatenkota::findOrFail($id);
            $kabupatenkota->delete();
            return redirect(route('kabupatenkota_index'));
    }

     //kecamatan
     public function kecamatan_index(){
        $kecamatan = kecamatan::all();
        $kabupatenkota = kabupatenkota::all();

        return view('admin.kecamatan_data',compact('kecamatan','kabupatenkota'));
    }

    public function kecamatan_tambah(Request $request){
          //dd($request);
          $this->validate(request(),[
              'kode_kecamatan'=>'required',
              'kecamatan'=>'required',
              'kabupatenkota_id'=>'required'
            ]);
           // dd($request);
            $kecamatan = new kecamatan;
            $kecamatan->kode_kecamatan= $request->kode_kecamatan;
            $kecamatan->kecamatan= $request->kecamatan;
            $kecamatan->kabupatenkota_id= $request->kabupatenkota_id;
            $kecamatan->save();
              return redirect(route('kecamatan_index'))->with('success', 'Data kabupaten / kota '.$request->kecamatan.' Berhasil di Simpan');
      }

    public function kecamatan_edit(){

        return view('admin.kecamatan_edit');
    }

    //kelurahan
    public function kelurahan_index(){
        $Kelurahan = Kelurahan::all();
        $Kecamatan = Kecamatan::all();
    return view('admin.kelurahan_data',compact('Kelurahan','Kecamatan'));
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
