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

use PDF;
use Carbon\Carbon;
use Hash;
use IDCrypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class outletController extends Controller
{

    public function index(){
        $id = auth::id();
        // dd($id);
        $Outlet  = Outlet::where('user_id', $id)->first();
        return view('outlet.index',compact('Outlet'));
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
        $user = User::findOrFail(Auth::user()->id);

        if ($request->foto) {
            $FotoExt  = $request->foto->getClientOriginalExtension();
            $FotoName = 'outlet'.$request->user_id.'-'. $request->name;
            $foto     = $FotoName.'.'.$FotoExt;
            $request->foto->move('images/outlet', $foto);
            $outlet->foto= $foto;
        }else {
            $outlet->foto = 'default.jpg';
          }


        $outlet->kelurahan_id     = $request->kelurahan_id;
        $outlet->alamat           = $request->alamat;
        $outlet->telepon          = $request->telepon;
        $outlet->user_id          = $user_id;
        $user->status             = 1;

        $outlet->save();
        $user->save();
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
        $this->validate(request(),[
          'nama'=>'required',
          'jabatan_id'=>'required',
          'jenis_kelamin'=>'required',
          'tanggal_lahir'=>'required',
          'telepon'=>'required',
          'tanggal_masuk'=>'required',
          'status_pkwt'=>'required',
          'status_kawin'=>'required'
        ]);
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
        $karyawan->outlet_id             = $outlet->id;
        $karyawan->jabatan_id            = $request->jabatan_id;
        $karyawan->kode_karyawan         = $request->kode_karyawan;
        $karyawan->nama                  = $request->nama;
        $karyawan->jenis_kelamin         = $request->jenis_kelamin;
        $karyawan->tanggal_lahir         = $request->tanggal_lahir;
        $karyawan->telepon               = $request->telepon;
        $karyawan->tanggal_masuk         = $request->tanggal_masuk;
        $karyawan->status_pkwt           = $request->status_pkwt;
        $karyawan->status_kawin          = $request->status_kawin;
        $karyawan->bpjs_kerja            = $request->bpjs_kerja;
        $karyawan->bpjs_kesehatan        = $request->bpjs_kesehatan;

        $karyawan->save();

          return redirect(route('karyawan_outlet_data'))->with('success', 'Data karyawan '.$karyawan->nama.' Berhasil di Tambahkan');
      }//fungsi menambahkan data outlet
 
      public function karyawan_detail($id){
        $id = IDCrypt::Decrypt($id);
        $Karyawan = Karyawan::findOrFail($id);
        $raport_karyawan = raport_karyawan::where('karyawan_id',$id)->get();
        $jabatan = Jabatan::all();
        return view('outlet.karyawan_detail',compact('Karyawan','jabatan','raport_karyawan'));
    }
    public function karyawan_update(Request $request, $id){
        //dd($request);
        $id = IDCrypt::Decrypt($id);
        $karyawan = Karyawan::findOrFail($id);
 
        $karyawan->jabatan_id            = $request->jabatan_id;
        $karyawan->kode_karyawan         = $karyawan->kode_karyawan;
        $karyawan->nama                  = $request->nama;
        $karyawan->jenis_kelamin         = $request->jenis_kelamin;
        $karyawan->tanggal_lahir         = $request->tanggal_lahir;
        $karyawan->telepon               = $request->telepon;
        $karyawan->tanggal_masuk         = $karyawan->tanggal_masuk;
        $karyawan->status_pkwt           = $request->status_pkwt;
        $karyawan->status_kawin          = $request->status_kawin;
        $karyawan->bpjs_kerja            = $request->bpjs_kerja;
        $karyawan->bpjs_kesehatan        = $request->bpjs_kesehatan;

        if ($request->foto) {
            $FotoExt    = $request->foto->getClientOriginalExtension();
            $FotoName   = 'karyawan-'.$request->nama;
            $gambar     = $FotoName.'.'.$FotoExt;
            $request->foto->move('images/karyawan', $gambar);
            $karyawan->foto= $gambar;
            }else {
            $karyawan->foto = 'default.jpg';
          }

        $karyawan->update();

          return redirect(route('karyawan_outlet_data'))->with('success', 'Data karyawan '.$karyawan->nama.' Berhasil di Ubah');
    
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

      public function penilaian_outlet_filter_periode(){

        return view('outlet.penilaian_outlet_filter_periode');
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
            return view('outlet.penilaian_karyawan_tambah',compact('karyawan'));
        }
        public function penilaian_karyawan_store(Request $request){
            $user_id=Auth::user()->id;
            $outlet= outlet::where('user_id',$user_id)->first();

            $kedisiplinan = ($request->q1 + $request->q2)/2;
            $tanggung_jawab = ($request->q3 + $request->q4)/2;
            $komunikasi = ($request->q5 + $request->q6 + $request->q7)/3;
            $pelayanan = ($request->q8 + $request->q9 + $request->q10)/3;
            $efisiensi = ($request->q11 + $request->q12)/2;
            $ketetapan = ($request->q13 + $request->q14)/2;
            $pengaturan_waktu = $request->q15;
            $kepribadian = ($kedisiplinan * 50/100) + ($tanggung_jawab * 30/100) +($komunikasi* 20/100);
            $prestasi= ($pelayanan *45/100)+($efisiensi*30/100)+($ketetapan*15/100) +($pengaturan_waktu*10/100);
           // dd($efisiensi); 
            $this->validate(request(),[
              'karyawan_id'=>'required'
            ]);
            $raport_karyawan = new raport_karyawan;
            $raport_karyawan->karyawan_id= $request->karyawan_id;
            $raport_karyawan->outlet_id = $outlet->id;
            $raport_karyawan->kedisiplinan= $kedisiplinan;
            $raport_karyawan->tanggung_jawab= $tanggung_jawab;
            $raport_karyawan->komunikasi= $komunikasi;
            $raport_karyawan->pelayanan= $pelayanan;
            $raport_karyawan->efisiensi= $efisiensi;
            $raport_karyawan->ketetapan= $ketetapan;
            $raport_karyawan->pengaturan_waktu= $pengaturan_waktu;
            $raport_karyawan->kepribadian= $kepribadian;
            $raport_karyawan->prestasi= $prestasi;

            $raport_karyawan->save();   
            return redirect(route('outlet_penilaian_karyawan_index'))->with('success', 'Data  Berhasil di tambah');
          }

          public function penilaian_karyawan_detail($id){
            $id = IDCrypt::Decrypt($id);
            $raport_karyawan=raport_karyawan::findOrFail($id);
            return view('outlet.penilaian_karyawan_detail',compact('raport_karyawan'));
          }

          public function penilaian_karyawan_hapus($id){
            $id = IDCrypt::Decrypt($id);
            $raport_karyawan=raport_karyawan::findOrFail($id);
            $raport_karyawan->delete();
            return redirect(route('outlet_penilaian_karyawan_index'))->with('success', 'Data  Berhasil di hpus');
        }

        public function penilaian_karyawan_filter(){
          return view('outlet.penilaian_karyawan_filter');
        }

        public function karyawan_outlet_cetak(){
          $user_id=Auth::user()->id;
          $outlet= outlet::where('user_id',$user_id)->first();
          $karyawan= karyawan::where('outlet_id',$outlet->id)->get();
          $tgl= Carbon::now()->format('d F Y');
          $pdf =PDF::loadView('laporan.karyawan_outlet', ['outlet' => $outlet,'karyawan'=>$karyawan,'tgl'=>$tgl]);
          $pdf->setPaper('a4', 'potrait');
          return $pdf->stream('Karyawan Pada outlet.pdf');
        }

        public function penilaian_outlet_detail($id){
          $id = IDCrypt::Decrypt($id);
          $raport_outlet = raport_outlet::findOrFail($id);
          //dd($raport_outlet);
          return view('outlet.penilaian_outlet_detail',compact('raport_outlet'));
          }

        public function penilaian_outlet_cetak(){
          $user_id=Auth::user()->id;
          $outlet= outlet::where('user_id',$user_id)->first();
          $raport_outlet= raport_outlet::where('outlet_id',$outlet->id)->get();
          $tgl= Carbon::now()->format('d F Y');
          $pdf =PDF::loadView('laporan.penilaian_outlet_outlet', ['outlet' => $outlet,'raport_outlet'=>$raport_outlet,'tgl'=>$tgl]);
          $pdf->setPaper('a4', 'potrait');
          return $pdf->stream('Penilaian outlet .pdf');
        }

        public function cetak_penilaian_outlet_filter_periode( Request $request){
          $user_id=Auth::user()->id;
          $outlet= outlet::where('user_id',$user_id)->first();
          $raport_outlet = Raport_outlet::whereBetween('created_at', [$request->tanggal_awal, $request->tanggal_akhir])->where('outlet_id',$outlet->id)->get();
          $tgl= Carbon::now()->format('d F Y');
          $bulan = $request->tanggal_awal;
          $pdf =PDF::loadView('laporan.penilaian_outlet_filter_periode', ['bulan' => $bulan, 'raport_outlet' => $raport_outlet,'tgl'=>$tgl]);
          $pdf->setPaper('a4', 'potrait');
          return $pdf->stream('Laporan Penilaian Outlet Filter Periode.pdf');
        }

        public function penilaian_karyawan_cetak(){
          $user_id=Auth::user()->id;
          $outlet= outlet::where('user_id',$user_id)->first();
          $raport_karyawan= raport_karyawan::where('outlet_id',$outlet->id)->get();
          $tgl= Carbon::now()->format('d F Y');
          $pdf =PDF::loadView('laporan.penilaian_karyawan_outlet_keseluruhan', ['outlet' => $outlet,'raport_karyawan'=>$raport_karyawan,'tgl'=>$tgl]);
          $pdf->setPaper('a4', 'potrait');
          return $pdf->stream('Penilaian karyawan pada satu outlet .pdf');
        }

        public function cetak_penilaian_karyawan_filter( Request $request){
          $user_id=Auth::user()->id;
          $outlet= outlet::where('user_id',$user_id)->first();
          $raport_karyawan = raport_karyawan::whereBetween('created_at', [$request->tanggal_awal, $request->tanggal_akhir])->where('outlet_id',$outlet->id)->get();
          $tgl= Carbon::now()->format('d F Y');
          $bulan = $request->tanggal_awal;
          $pdf =PDF::loadView('laporan.penilaian_karyawan_outlet_filter_periode', ['outlet'=>$outlet,'bulan' => $bulan, 'raport_karyawan' => $raport_karyawan,'tgl'=>$tgl]);
          $pdf->setPaper('a4', 'potrait');
          return $pdf->stream('Laporan Penilaian Karyawan Filter Periode.pdf');
        }


}
    