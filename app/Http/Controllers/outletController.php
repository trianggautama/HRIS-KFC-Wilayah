<?php

namespace App\Http\Controllers;

use App\User;
use App\Outlet;
use App\Jabatan;
use App\Karyawan;
use App\Kelurahan;
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

    public function outlet_tambah(){
        $user = User::findOrFail(Auth::user()->id);
        $kelurahan=Kelurahan::all();
        // dd($user);
        $outlet = $user->outlet;
        // dd($outlet);
        $outlet = count($outlet);
        // dd($outlet);
        if($outlet == 0){
            return view('outlet.profil_tambah',compact('kelurahan'));
        }
            $outlet_datas = outlet::where('user_id',Auth::user()->id)->first();
            // dd($outlet_datas);
            return view('outlet.profil_edit',compact('outlet_datas','kelurahan'));
    }

    public function outlet_tambah_store(Request $request){
        $user_id = Auth::user()->id;
        $outlet = new outlet;

        if ($request->foto) {
            $FotoExt  = $request->foto->getClientOriginalExtension();
            $FotoName = 'outlet'.$request->user_id.'-'. $request->name;
            $foto     = $FotoName.'.'.$FotoExt;
            $request->foto->move('images/outlet', $foto);
            $outlet->foto= $foto;
        }else {
            $outlet->foto = 'default.jpg';
          }


        $outlet->kelurahan_id       = $request->kelurahan_id;
        // $outlet->nama_cabang      = $request->nama_cabang;
        $outlet->alamat      = $request->alamat;
        $outlet->telepon      = $request->telepon;
        $outlet->user_id      = $user_id;


        $outlet->save();

          return redirect(route('admin_outlet_index'))->with('success', 'Data outlet '.$outlet->user->name.' Berhasil di Tambahkan');
      }//fungsi menambahkan data outlet

      public function outlet_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $outlet = outlet::findOrFail($id);

        if($request->foto != null){
        $FotoExt  = $request->foto->getClientOriginalExtension();
        $FotoName = $request->user_id.' - '.$request->nama_outlet;
        $foto   = $FotoName.'.'.$FotoExt;
        $request->foto->move('images/outlet', $foto);
        $outlet->foto       = $foto;
        }

        $outlet->kelurahan_id       = $request->kelurahan_id;
        $outlet->alamat      = $request->alamat;
        $outlet->telepon      = $request->telepon;

        // $user->update();
        $outlet->update();
        return redirect(route('admin_outlet_index'))->with('success', 'Data outlet '.$request->name.' Berhasil di ubah');
         }


    public function karyawan_data(){
        $outlet_id=Auth::user()->id;
        $karyawan= karyawan::where('outlet_id',$outlet_id);
        $getallkaryawan = karyawan::all();

        $data = karyawan::all()->max('id');
        $data++;
        $str='KAR00';
        $kode = count($getallkaryawan);
            //dd($perusahaan);
            if($kode == 0){
                $kj = $str.+1;
            }
                $kj = $str.+$data;

        return view('outlet.karyawan_data',compact('karyawan','kj'));
    }

    public function karyawan_detail(){

        return view('outlet.karyawan_detail');
    }
}
