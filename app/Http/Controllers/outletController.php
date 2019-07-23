<?php

namespace App\Http\Controllers;

use App\User;
use App\Outlet;
use App\Jabatan;
use App\Karyawan;
use App\Kelurahan;
use App\object_penilaian;
use App\raport_outlet;
use App\raport_karyawan;
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
            return view('outlet.outlet_edit',compact('outlet_datas','kelurahan'));
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
        $user_id=Auth::user()->id;
        $outlet= outlet::where('user_id',$user_id)->first();
        // dd($outlet);
        $karyawan= karyawan::where('outlet_id',$outlet->id)->get();
        // dd($karyawan);
        $getallkaryawan = karyawan::all();
        $jabatan = jabatan::all();

        $data = $karyawan->max('id');
        // dd($data);
        $data++;
        $str='KAR00';
        $kode = count($getallkaryawan);
            //dd($perusahaan);
            if($kode == 0){
                $kj = $str.+1;
            }
                $kj = $str.+$data;

        return view('outlet.karyawan_data',compact('karyawan','jabatan','kj'));
    }

    public function karyawan_store(Request $request){
        $user_id = Auth::user()->id;
        $outlet= outlet::where('user_id',$user_id)->first();
        // dd($outlet->id);
        $karyawan = new karyawan;

        if ($request->foto) {
            $FotoExt  = $request->foto->getClientOriginalExtension();
            $FotoName = 'karyawan'.$outlet_id.'-'. $request->nama;
            $foto     = $FotoName.'.'.$FotoExt;
            $request->foto->move('images/karyawan', $foto);
            $karyawan->foto= $foto;
        }else {
            $karyawan->foto = 'default.jpg';
          }

        // dd($outlet_id);
        $karyawan->outlet_id       = $outlet->id;
        $karyawan->jabatan_id      = $request->jabatan_id;
        $karyawan->kode_karyawan      = $request->kode_karyawan;
        $karyawan->nama      = $request->nama;
        $karyawan->jenis_kelamin      = $request->jenis_kelamin;
        $karyawan->alamat      = $request->alamat;
        $karyawan->telepon      = $request->telepon;


        $karyawan->save();

          return redirect(route('karyawan_outlet_data'))->with('success', 'Data karyawan '.$karyawan->nama.' Berhasil di Tambahkan');
      }//fungsi menambahkan data outlet
 
      public function karyawan_detail($id){
        $id = IDCrypt::Decrypt($id);
        $Karyawan = Karyawan::findOrFail($id);
        return view('outlet.karyawan_detail',compact('Karyawan'));
    }

    public function karyawan_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $Karyawan = Karyawan::findOrFail($id);
        $Karyawan->delete();
        return redirect(route('karyawan_outlet_data'))->with('success', 'Data karyawan Berhasil di Hapus');
    }

     //penilaianOutlet
     public function penilaian_outlet_index(){
        $user_id=Auth::user()->id;
        $outlet= outlet::where('user_id',$user_id)->first();
        $raport_outlet = raport_outlet::where('outlet_id',$outlet->id)->get();
          return view('outlet.penilaian_outlet',compact('raport_outlet'));
      }

      public function penilaian_karyawan_index(){
        $user_id=Auth::user()->id;
        $outlet= outlet::where('user_id',$user_id)->first();
        $raport_karyawan = raport_karyawan::where('outlet_id',$outlet->id)->get();
          return view('outlet.penilaian_karyawan',compact('raport_karyawan'));
      }
      
         //penilaianOutlet
         public function penilaian_karyawan_tambah(){
            $user_id=Auth::user()->id;
            $outlet= outlet::where('user_id',$user_id)->first();
            $karyawan = karyawan::where('outlet_id',$outlet->id)->get();
            $object_penilaian =object_penilaian::where('status',2)->get();
            return view('outlet.penilaian_karyawan_tambah',compact('object_penilaian','karyawan'));
        }
        public function penilaian_karyawan_store(Request $request){
            $user_id=Auth::user()->id;
            $outlet= outlet::where('user_id',$user_id)->first();
            $collection = collect($request);
            $pembagi = $collection->count();
            $pembagi = $pembagi - 3;
            $average = collect($request)->sum();
            $nilai  = $average/$pembagi;
            $this->validate(request(),[
              'karyawan_id'=>'required'
            ]);
            $raport_karyawan = new raport_karyawan;
            $raport_karyawan->nilai= $nilai;
            $raport_karyawan->karyawan_id= $request->karyawan_id;
            $raport_karyawan->outlet_id = $outlet->id;
            $raport_karyawan->save();   
            return redirect(route('outlet_penilaian_karyawan_index'))->with('success', 'Data  Berhasil di tambah');
          }

          public function penilaian_karyawan_hapus($id){
            $id = IDCrypt::Decrypt($id);
            $raport_karyawan=raport_karyawan::findOrFail($id);
            $raport_karyawan->delete();
            return redirect(route('outlet_penilaian_karyawan_index'))->with('success', 'Data  Berhasil di hpus');
        }
}
    