<?php

namespace App\Http\Controllers;
use App\User;
use App\Outlet;
use App\Jabatan;
use App\Karyawan;
use App\kecamatan;
use App\Kelurahan;
use App\kabupatenkota;
use App\object_penilaian;
use App\raport_outlet;
use App\raport_karyawan;

use Hash;
use IDCrypt;
use PDF;
use Carbon\Carbon;

use Illuminate\Http\Request;

class adminController extends Controller
{

    public function index(){
        $outlet = Outlet::all();
        $karyawan = Karyawan::all();
        $raport_outlet = Raport_outlet::all();
        $raport_karyawan = Raport_karyawan::all();
        return view('admin.index',compact('outlet','karyawan','raport_karyawan','raport_outlet'));
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
        $Karyawan = Karyawan::where('outlet_id',$id)->get();
        $raport_outlet= raport_outlet::where('outlet_id',$id)->get();
        $kelurahan = Kelurahan::all();
        // dd($kelurahan);
        return view('admin.outlet_detail',compact('Outlet','Karyawan','kelurahan','raport_outlet'));
    }

    public function outlet_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $Outlet = Outlet::findOrFail($id);
        $User = User::find($Outlet->user_id);

        //  $this->validate(request(),[
        //     'kode_rambu'=>'required',
        //     'nama_rambu'=>'required',
        //     'keterangan'=>'required'
        // ]);
        $User->name     = $request->name;
        $User->email    = $request->email;
        if($request->password != null){
        $Password       = Hash::make($request->password);
        $User->password = $Password;
        }
        if($request->foto != null){
        $FotoExt  = $request->foto->getClientOriginalExtension();
        $FotoName = $request->id_user.' - '.$request->name;
        $gambar   = $FotoName.'.'.$FotoExt;
        $request->foto->move('images/outlet', $gambar);
        $Outlet->foto       = $gambar;
        }

        $Outlet->kelurahan_id = $request->kelurahan_id;
        $Outlet->alamat       = $request->alamat;
        $Outlet->telepon      = $request->telepon;

        $User->update();
        $Outlet->update();
        return redirect(route('outlet_index'))->with('success', 'Data outlet '.$request->name.' Berhasil di ubah');
         }//fungsi edit data outlet

    public function outlet_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $Outlet=Outlet::findOrFail($id);
        // $Outlet->user()->delete();
        $Outlet->delete();

        return redirect(route('outlet_index'))->with('success', 'Data outlet berhasil di hapus');
    }//fungsi menghapus data outlet

    public function outlet_filter(){
    $kabupatenkota=kabupatenkota::all();
    return view('admin.outlet_filter',compact('kabupatenkota')); 
    }//fungsi menghapus data outlet

      //kabupatenkota
      public function kabupatenkota_index(){
        $kabupatenkota = kabupatenkota::all();

        $data = kabupatenkota::all()->max('id');
        $data++;
        $str='KAB00';
        $kode = count($kabupatenkota);
            //dd($perusahaan);
            if($kode == 0){
                $kj = $str.+1;
            }
                $kj = $str.+$data;

        return view('admin.kabupatenkota_data',compact('kabupatenkota','kj'));
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
        $id = IDCrypt::Decrypt($id);
        $kabupatenkota = kabupatenkota::findOrFail($id);
       // dd($request);
       $this->validate(request(),[
        'kode_kabupatenkota'=>'required',
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
            return redirect(route('kabupatenkota_index'))->with('success', 'Data  Berhasil di Hapus');
    }

     //kecamatan
     public function kecamatan_index(){
        $kecamatan = kecamatan::all();
        $kabupatenkota = kabupatenkota::all();
        $data = kecamatan::all()->max('id');
        $data++;
        $str='KEC00';
        $kode = count($kecamatan);
            //dd($perusahaan);
            if($kode == 0){
                $kj = $str.+1;
            }
                $kj = $str.+$data;

        return view('admin.kecamatan_data',compact('kecamatan','kabupatenkota','kj'));
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

      public function kecamatan_detail(){

        return view('admin.kecamatan_detail');
    }

    public function kecamatan_edit($id){
        $id = IDCrypt::Decrypt($id);
        $kabupatenkota = kabupatenkota::all();
        $kecamatan=kecamatan::findOrFail($id);
        return view('admin.kecamatan_edit',compact('kecamatan','kabupatenkota'));
    }

    public function kecamatan_update( Request $request ,$id){
        $id = IDCrypt::Decrypt($id);
        $Kecamatan = Kecamatan::findOrFail($id);
       $this->validate(request(),[
        'kode_kecamatan'=>'required',
        'kecamatan'=>'required',
        'kabupatenkota_id'=>'required'
      ]);
           $Kecamatan->kode_kecamatan= $request->kode_kecamatan;
           $Kecamatan->kecamatan= $request->kecamatan;
           $Kecamatan->kabupatenkota_id= $request->kabupatenkota_id;
           $Kecamatan->update();
             return redirect(route('kecamatan_index'))->with('success', 'Data  Berhasil di Ubah');
     }//fungsi kecamatan update

     public function kecamatan_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $Kecamatan=kecamatan::findOrFail($id);
        $Kecamatan->delete();
        return redirect(route('kecamatan_index'))->with('hapus', 'Data  Berhasil di Hapus');

    }  //menghapus data  kecamatan

    //kelurahan
    public function kelurahan_index(){
        $Kelurahan = Kelurahan::all();
        $Kecamatan = Kecamatan::all();
        $data = kelurahan::all()->max('id');
        $data++;
        $str='KEL00';
        $kode = count($Kelurahan);
            //dd($perusahaan);
            if($kode == 0){
                $kj = $str.+1;
            }
                $kj = $str.+$data;
    return view('admin.kelurahan_data',compact('Kelurahan','Kecamatan','kj'));
    }

    public function kelurahan_tambah(Request $request){
        //dd($request);
        $this->validate(request(),[
            'kode_kelurahan'=>'required',
            'kelurahan'=>'required',
            'kecamatan_id'=>'required'
          ]);
         // dd($request);
          $Kelurahan = new Kelurahan;
          $Kelurahan->kode_kelurahan    = $request->kode_kelurahan;
          $Kelurahan->kelurahan         = $request->kelurahan;
          $Kelurahan->kecamatan_id      = $request->kecamatan_id;
          $Kelurahan->save();
            return redirect(route('kelurahan_index'))->with('success', 'Data Kelurahan '.$request->kelurahan.' Berhasil di Simpan');
    }//fungsi kelurahan tambah

    public function kelurahan_detail(){

      return view('admin.kelurahan_detail');
   }
    public function kelurahan_edit($id){
        $id = IDCrypt::Decrypt($id);
        $Kelurahan = Kelurahan::findOrFail($id);
        $Kecamatan = Kecamatan::All();

        return view('admin.kelurahan_edit',compact('Kelurahan','Kecamatan'));
    }//fungsi kelurahan edit

    public function kelurahan_update( Request $request ,$id){
        $id = IDCrypt::Decrypt($id);
        $Kelurahan = Kelurahan::findOrFail($id);
       // dd($request);
       $this->validate(request(),[
        'kode_kelurahan'=>'required',
        'kelurahan'=>'required',
        'kecamatan_id'=>'required'
      ]);
           $Kelurahan->kode_kelurahan= $request->kode_kelurahan;
           $Kelurahan->kelurahan= $request->kelurahan;
           $Kelurahan->kecamatan_id= $request->kecamatan_id;
           $Kelurahan->update();
             return redirect(route('kelurahan_index'))->with('success', 'Data  Berhasil di Ubah');
     }//fungsi kelurahan update

    public function kelurahan_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $Kelurahan=Kelurahan::findOrFail($id);
        $Kelurahan->delete();
        return redirect(route('kelurahan_index'))->with('success', 'Data  Berhasil di Hapus');
    }

     //jabatan
     public function jabatan_index(){
        $Jabatan = Jabatan::All();
        // dd($Jabatan);
        $data = jabatan::all()->max('id');
        $data++;
        $str='KJ00';
        $kode = count($Jabatan);
            //dd($perusahaan);
            if($kode == 0){
                $kj = $str.+1;
            }
                $kj = $str.+$data;


            // dd($kj);
        return view('admin.jabatan_data',compact('Jabatan','kj'));
    }//fungsi jabatan index

    public function jabatan_tambah(Request $request){
        $this->validate(request(),[
            'kode_jabatan'=>'required',
            'jabatan'=>'required',
            'tugas'=>'required'
          ]);
          $jabatan = new jabatan;
          $jabatan->kode_jabatan= $request->kode_jabatan;
          $jabatan->jabatan= $request->jabatan;
          $jabatan->tugas= $request->tugas;
          $jabatan->gajih= $request->gajih;
          $jabatan->save();
            return redirect(route('jabatan_index'))->with('success', 'Data jabatan '.$request->jabatan.' Berhasil di Simpan');
    }//fungsi jabatan tambah

    public function jabatan_detail($id){
        $id = IDCrypt::Decrypt($id);
        $jabatan= Jabatan::findOrFail($id);
        $Karyawan = Karyawan::where('jabatan_id',$id)->get();
        return view('admin.jabatan_detail',compact('Karyawan','jabatan'));
    }//fungsi jabatan edit

    public function jabatan_edit($id){
        $id = IDCrypt::Decrypt($id);
        $Jabatan = jabatan::findOrFail($id);

        return view('admin.jabatan_edit',compact('Jabatan'));
    }//fungsi jabatan edit

    public function jabatan_update( Request $request ,$id){
        $id = IDCrypt::Decrypt($id);
        $Jabatan = Jabatan::findOrFail($id);
       $this->validate(request(),[
        'kode_jabatan'=>'required',
        'jabatan'=>'required',
        'tugas'=>'required',
        'gajih'=>'required'
      ]);
           $Jabatan->kode_jabatan= $request->kode_jabatan;
           $Jabatan->jabatan= $request->jabatan;
           $Jabatan->tugas= $request->tugas;
           $Jabatan->gajih= $request->gajih;
           $Jabatan->update();
             return redirect(route('jabatan_index'))->with('success', 'Data  Berhasil di Ubah');
     }//fungsi jabatan update

    public function jabatan_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $Jabatan=Jabatan::findOrFail($id);
        $Jabatan->delete();
        return redirect(route('jabatan_index'));
    }
        //karyawan
        public function karyawan_index(){
            $Karyawan= Karyawan::All();
            $Outlet= Outlet::All();
            // dd($Outlet);
            $Jabatan= Jabatan::All();
            return view('admin.karyawan_data',compact('Karyawan','Outlet','Jabatan'));
        }

        public function karyawan_detail($id){
            $id = IDCrypt::Decrypt($id);
            $Karyawan = Karyawan::findOrFail($id);
            $raport_karyawan = raport_karyawan::where('karyawan_id',$id)->get();
            $jabatan= Jabatan::all();
            return view('admin.karyawan_detail',compact('Karyawan','jabatan','raport_karyawan'));
        }

        
        public function karyawan_filter(){
          $outlet= Outlet::all();
          return view('admin.karyawan_filter',compact('outlet'));
      }

      public function karyawan_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $Karyawan = Karyawan::findOrFail($id);
        $Karyawan->delete();
        return redirect(route('karyawan_index'))->with('success', 'Data  Berhasil di Hapus');
      }

      //object Penilaian
      public function object_penilaian_index(){
        $object_penilaian = object_penilaian::all();
        return view('admin.object_penilaian_data',compact('object_penilaian'));
      }

      public function object_penilaian_tambah(Request $request){
        $this->validate(request(),[
            'object'=>'required',
            'status'=>'required'
          ]);
          $object_penilaian = new object_penilaian;
          $object_penilaian->object= $request->object;
          $object_penilaian->status= $request->status;
          $object_penilaian->save();       
          return redirect(route('object_penilaian_index'))->with('success', 'Data  Berhasil di simpan');
        }

      public function object_penilaian_edit($id){
        $id = IDCrypt::Decrypt($id);
        $object_penilaian = object_penilaian::findorFail($id);
        return view('admin.object_penilaian_edit',compact('object_penilaian'));
      }
      public function object_penilaian_update( Request $request ,$id){
        $id = IDCrypt::Decrypt($id);
        $object_penilaian = object_penilaian::findOrFail($id);
        $this->validate(request(),[
          'object'=>'required',
          'status'=>'required'
        ]);
        $object_penilaian = new object_penilaian;
        $object_penilaian->object= $request->object;
        $object_penilaian->status= $request->status;
        $object_penilaian->update();   
          return redirect(route('object_penilaian_index'))->with('success', 'Data  Berhasil di ubah');
     }//fungsi jabatan update

     public function object_penilaian_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $object_penilaian = object_penilaian::findOrFail($id);
        $object_penilaian->delete();
        return redirect(route('object_penilaian_index'))->with('success', 'Data  Berhasil di hapus');
    }
      //penilaianOutlet
      public function penilaian_outlet_index(){
        $raport_outlet = raport_outlet::all();
          return view('admin.penilaian_outlet_data',compact('raport_outlet'));
      }

      public function penilaian_outlet_tambah(){
        $outlet = Outlet::all();
        $object_penilaian =object_penilaian::where('status',1)->get();
        return view('admin.penilaian_outlet_tambah',compact('object_penilaian','outlet'));
    }
    public function penilaian_outlet_store(Request $request){
      $collection = collect($request);
      $pembagi = $collection->count();
      $pembagi = $pembagi - 3;
      $average = collect($request)->sum();
      $nilai  = $average/$pembagi;
      $this->validate(request(),[
        'outlet_id'=>'required'
      ]);
      $raport_outlet = new raport_outlet;
      $raport_outlet->nilai= $nilai-5;
      $raport_outlet->outlet_id= $request->outlet_id;
      $raport_outlet->save();   
      return redirect(route('penilaian_outlet_index'))->with('success', 'Data  Berhasil di tambah');
    }

    public function penilaian_outlet_filter_periode(){

      return view('admin.penilaian_outlet_periode');
  }

  public function penilaian_outlet_filter_outlet(){
    $outlet = Outlet::all();
    return view('admin.penilaian_outlet_outlet',compact('outlet'));
}
  
    public function penilaian_outlet_hapus($id){
      $id = IDCrypt::Decrypt($id);
      $raport_outlet = raport_outlet::findOrFail($id);
      $raport_outlet->delete();
      return redirect(route('penilaian_outlet_index'))->with('success', 'Data  Berhasil di hapus');
       }

    //penilaian karyawan
    public function penilaian_karyawan_index(){
      $raport_karyawan = raport_karyawan::all();
      return view('admin.penilaian_karyawan_data',compact('raport_karyawan'));
    }

    public function penilaian_karyawan_filter_outlet(){
      $outlet = Outlet::all();
      return view('admin.penilaian_karyawan_filter_outlet',compact('outlet'));
    }

    public function penilaian_karyawan_filter_periode(){
      return view('admin.penilaian_karyawan_filter_periode');
    }



  //Fungsi Laporan

   //penilaian karyawan


  public function cetak_outlet_keseluruhan(){
    $outlet = Outlet::all();
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.outlet_keseluruhan', ['outlet' => $outlet,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
    return $pdf->stream('Laporan Outlet Keseluruhan.pdf');
  }

  public function cetak_karyawan_keseluruhan(){
    $karyawan = Karyawan::all();
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.karyawan_keseluruhan', ['karyawan' => $karyawan,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
    return $pdf->stream('Laporan Outlet Keseluruhan.pdf');
  }

  public function outlet_profil_cetak($id){
    $id = IDCrypt::Decrypt($id);
    $outlet = Outlet::findOrFail($id);
    $karyawan = Karyawan::where('outlet_id', $id)->get();
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.profil_outlet', ['outlet' => $outlet,'karyawan'=>$karyawan,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'landscape');
    return $pdf->stream('Profil Outlet.pdf');
  }

  public function cetak_jabatan_keseluruhan(){
    $jabatan = Jabatan::all();
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.jabatan_keseluruhan', ['jabatan' => $jabatan,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
    return $pdf->stream('Laporan Jabatan Keseluruhan.pdf');
  }

  public function cetak_jabatan_detail($id){
    $id = IDCrypt::Decrypt($id);
    $jabatan = Jabatan::findOrFail($id);
    $karyawan = Karyawan::where('jabatan_id',$id)->get();
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.jabatan_detail', ['karyawan' => $karyawan,'jabatan'=>$jabatan,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
    return $pdf->stream('Laporan Jabatan Detail.pdf');
  }

  public function cetak_objek_penilaian(){
    $object_penilaian = Object_penilaian::all();
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.objek_penilaian', ['object_penilaian' => $object_penilaian,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
    return $pdf->stream('Laporan Objek penilaian.pdf');
  }

  public function cetak_penilaian_outlet_keseluruhan(){
    $raport_outlet = Raport_outlet::all();
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.penilaian_outlet_keseluruhan', ['raport_outlet' => $raport_outlet,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
    return $pdf->stream('Laporan Penilaian Outlet Keseluruhan.pdf');
  }
  

  public function cetak_penilaian_outlet_filter_outlet( Request $request){
    $raport_outlet = Raport_outlet::where('outlet_id',$request->outlet_id)->get();
    $outlet = Outlet::findOrFail($request->outlet_id);
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.penilaian_outlet_filter_outlet', ['raport_outlet' => $raport_outlet,'outlet'=>$outlet,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
    return $pdf->stream('Laporan Penilaian Outlet Filter Outlet.pdf');
  }

  public function cetak_penilaian_outlet_filter_periode( Request $request){
    $raport_outlet = Raport_outlet::whereBetween('created_at', [$request->tanggal_awal, $request->tanggal_akhir])->get();
    $tgl= Carbon::now()->format('d F Y');
    $bulan = $request->tanggal_awal;
    $pdf =PDF::loadView('laporan.penilaian_outlet_filter_periode', ['bulan' => $bulan, 'raport_outlet' => $raport_outlet,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
    return $pdf->stream('Laporan Penilaian Outlet Filter Periode.pdf');
  }

  public function penilaian_karyawan_cetak(){
    $raport_karyawan = raport_karyawan::all();
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.penilaian_karyawan_keseluruhan', ['raport_karyawan' => $raport_karyawan,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
    return $pdf->stream('Laporan Penilaian Karyawan Keseluruhan.pdf');
  }

  public function cetak_penilaian_karyawan_filter_outlet(Request $request){
    $outlet = Outlet::findOrFail($request->outlet_id);
    $raport_karyawan = raport_karyawan::where('outlet_id',$request->outlet_id)->get();
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.penilaian_karyawan_outlet_keseluruhan', ['outlet' => $outlet,'raport_karyawan' => $raport_karyawan,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
    return $pdf->stream('Laporan Penilaian Karyawan Per Outlet.pdf');
  }

  public function cetak_penilaian_karyawan_filter_periode(Request $request){
    $raport_karyawan = raport_karyawan::whereBetween('created_at', [$request->tanggal_awal, $request->tanggal_akhir])->get();
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.penilaian_karyawan_periode', ['raport_karyawan' => $raport_karyawan,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
    return $pdf->stream('Laporan Penilaian Karyawan per Periode.pdf');
  }

  public function cetak_karyawan_filter(Request $request){
    $karyawan = Karyawan::where('outlet_id',$request->outlet_id)->get();
    $outlet = outlet::findOrFail($request->outlet_id);
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.karyawan_outlet', ['outlet'=>$outlet,'karyawan' => $karyawan,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
    return $pdf->stream('Laporan Karyawan Filter.pdf');
  }

  public function cetak_outlet_filter(Request $request){
    $kabupatenkota = kabupatenkota::findOrFail($request->kabupatenkota_id);
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.outlet_filter', ['kabupatenkota'=>$kabupatenkota,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
    return $pdf->stream('Laporan Outlet Filter.pdf');
  }

  public function cetak_profil_karyawan($id){
    $id = IDCrypt::Decrypt($id);
    $Karyawan = Karyawan::findOrFail($id);
    $tgl= Carbon::now()->format('d F Y');
    $pdf =PDF::loadView('laporan.profil_karyawan', ['Karyawan'=>$Karyawan,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'landscape');
    return $pdf->stream('Profil Karyawan.pdf');
  }

}
