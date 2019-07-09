<?php

namespace App\Http\Controllers;

use App\Outlet;
use App\User;
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

    public function outlet_tambah(){
        $user = User::findOrFail(Auth::user()->id);
        // dd($user);
        $outlet = $user->outlet;
        // dd($perusahaan);
        $outlet = count($outlet);
        //dd($perusahaan);
        if($outlet == 0){
            return view('outlet.outlet_tambah');
        }
            $outlet = Outlet::where('user_id',Auth::user()->id)->first();
            return view('users.outlet_edit',compact('outlet'));
    }//fungsi outlet tambah

    public function perusahaan_tambah_store(Request $request){
        $user_id = Auth::user()->id;
        $outlet = new Outlet;
        if ($request->gambar) {
            $FotoExt  = $request->gambar->getClientOriginalExtension();
            $FotoName = 'outlet'.$request->user_id.'-'. $request->name;
            $gambar     = $FotoName.'.'.$FotoExt;
            $request->gambar->move('images/outlet', $gambar);
            $outlet->gambar= $gambar;
        }else {
            $outlet->gambar = 'default.jpg';
          }
        $perusahaan->alamat       = $request->alamat;
        $perusahaan->telepon      = $request->telepon;
        $perusahaan->website      = $request->website;
        $perusahaan->user_id      = $user_id;
        $perusahaan->save();
          return redirect(route('user_index'))->with('success', 'Data perusahaan '.$perusahaan->user->name.' Berhasil di Tambahkan');
      }//fungsi menambahkan data perusahaan


    public function karyawan_data(){

        return view('outlet.karyawan_data');
    }

    public function karyawan_detail(){

        return view('outlet.karyawan_detail');
    }
}
