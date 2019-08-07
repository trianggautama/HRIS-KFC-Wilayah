@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">
            <h4>Profile Karyawan</h4>
            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Karyawan</a>
                </li>
                <li class="breadcrumb-item"><a href="profile.html">Detail</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- Header end -->
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card faq-left">
                <div class="social-profile">
                    <img class="img-fluid" src="{{asset('/images/karyawan/'.$Karyawan->foto)}}" alt="">
                    <div class="profile-hvr m-t-15">
                        <i class="icofont icofont-ui-edit p-r-10 c-pointer"></i>
                        <i class="icofont icofont-ui-delete c-pointer"></i>
                    </div>
                </div>
                <div class="card-block text-center">
                    <h4 class="f-18 f-normal m-b-10 txt-primary">{{$Karyawan->nama}}</h4>
                    <h5 class="f-14">{{$Karyawan->jabatan->jabatan}}</h5>
                    <a href="{{route('cetak_profil_karyawan',['id' => IDCrypt::Encrypt( $Karyawan->id)])}}" class="btn btn-block btn-primary">Cetak Profil</a>
                </div>
            </div>
            <!-- end of card-block -->
        </div>
        <!-- end of col-lg-3 -->

        <!-- start col-lg-9 -->
        <div class="col-xl-9 col-lg-8">
            <!-- Nav tabs -->
            <div class="tab-header">
                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Biodata</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#project" role="tab">Edit Data</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#infokerja" role="tab">Info Pekerjaan</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#members" role="tab">Raport Karyawan</a>
                        <div class="slide"></div>
                    </li>
                </ul>
            </div>
            <!-- end of tab-header -->

            <div class="tab-content">
                <div class="tab-pane active" id="personal" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Biodata</h5>
                            <button id="edit-btn" type="button"
                                class="btn btn-primary waves-effect waves-light f-right">
                                <i class="icofont icofont-edit"></i>
                            </button>
                        </div>
                        <div class="card-block">
                            <div class="view-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-6">
                                                    <table class="table m-0">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Nama Lengkap</th>
                                                                <td>{{$Karyawan->nama}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Jenis Kelamin</th>
                                                                <td>{{$Karyawan->jenis_kelamin}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Tanggal Lahir</th>
                                                                <td>{{$Karyawan->tanggal_lahir}}</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of table col-lg-6 -->

                                                <div class="col-lg-12 col-xl-6">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Kode Karyawan</th>
                                                                <td>{{$Karyawan->kode_karyawan}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">No Tlp</th>
                                                                <td>{{$Karyawan->telepon}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Status</th>
                                                                @if($Karyawan->status_kawin == 1)
                                                                <td><label class="label bg-success">Sudah Menikah</label></td>
                                                                @else
                                                                <td><label class="label bg-primary">Belum Menikah</label></td>
                                                                @endif
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of table col-lg-6 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of general info -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>
                            <!-- end of view-info -->
                        </div>
                        <!-- end of card-block -->
                    </div>
                    <!-- end of card-->
                </div>

                <div class="tab-pane" id="project" role="tabpanel">
                    <div class="row">
                        <!--input sizes starts-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Ubah Data</h5>
                                    <div class="f-right">
                                        <a href="" data-toggle="modal" data-target="#input-size-Modal"><i
                                                class="icofont icofont-code-alt"></i></a>
                                    </div>
                                </div>
                                <form  method="post" action="" enctype="multipart/form-data">
                                {{method_field('PUT') }}
                                {{ csrf_field() }}
                                <div class="card-block">
                                    <div class="form-group row">
                                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama
                                                Pegawai</label></div>
                                        <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"
                                                placeholder="Nama" name="nama" value="{{$Karyawan->nama}}"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Jenis
                                                Kelamin</label></div>
                                        <div class="col-md-10">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="jenis_kelamin"
                                                        id="optionsRadios1" value="Laki-Laki" {{ ($Karyawan->jenis_kelamin == "Laki-Laki")? "checked" : "" }} >
                                                    Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label for="optionsRadios2" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="jenis_kelamin"
                                                        id="optionsRadios2" value="Perempuan" {{ ($Karyawan->jenis_kelamin == "Perempuan")? "checked" : "" }} >
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2"><label for="InputNormal"
                                                class="form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-md-10"><input type="date" class="form-control" id="InputNormal" name="tanggal_lahir"
                                                value="{{$Karyawan->tanggal_lahir}}"></div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Status
                                                Menikah</label></div>
                                        <div class="col-md-10">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="status_kawin"
                                                        id="optionsRadios3" value="1" {{ ($Karyawan->status_kawin == "2")? "checked" : "" }}>
                                                    Belum Menikah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label for="optionsRadios2" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="status_kawin"
                                                        id="optionsRadios4" value="2" {{ ($Karyawan->status_kawin == "1")? "checked" : "" }}>
                                                    Sudah Menikah
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">No
                                                Telepon</label></div>
                                        <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"
                                                placeholder="No.Tlp" name="telepon" value={{$Karyawan->telepon}}></div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="file" class="col-md-2 col-form-label form-control-label">Foto
                                            Pegawai</label>
                                        <div class="col-md-9">
                                            <label for="file" class="custom-file">
                                                <input type="file" id="file" class="custom-file-input" name="foto">
                                                <span class="custom-file-control"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2"><label for="exampleSelect1"
                                                class="form-control-label">Jabatan</label></div>
                                        <div class="col-md-10">
                                            <select class="form-control" id="exampleSelect1" name="jabatan_id">
                                            @foreach($jabatan as $d)
                                                <option value="{{$d->id}}" {{ $Karyawan->jabatan_id  == $d->id ? 'selected' : ''}}>{{$d->jabatan}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Status
                                                Kepegawaian</label></div>
                                        <div class="col-md-10">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="status_pkwt"
                                                        id="optionsRadios3" value="2" {{ ($Karyawan->status_pkwt == "2")? "checked" : "" }}>
                                                    Belum pegawai Tetap
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label for="optionsRadios2" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="status_pkwt"
                                                        id="optionsRadios4" value="1" {{ ($Karyawan->status_pkwt == "1")? "checked" : "" }}>
                                                    Pegawai Tetap
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">BPJS Kerja
                                                </label></div>
                                        <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"
                                                placeholder="No.Tlp" name="bpjs_kerja" value={{$Karyawan->bpjs_kerja}}></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">BPJS Kesehatan
                                                </label></div>
                                        <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"
                                                placeholder="No.Tlp" name="bpjs_kesehatan" value={{$Karyawan->bpjs_kesehatan}}></div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <input type="submit" class="btn btn-inverse-primary" value="ubah data">
                                </div>
                                </form>
                            </div>
                        </div>
                        <!--input sizes ends-->

                    </div>
                    <!-- end of card-main -->
                </div>
                <div class="tab-pane" id="infokerja" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Info Pekerjaan</h5>
                            <button id="edit-btn" type="button"
                                class="btn btn-primary waves-effect waves-light f-right">
                                <i class="icofont icofont-edit"></i>
                            </button>
                        </div>
                        <div class="card-block">
                            <div class="view-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-6">
                                                    <table class="table m-0">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Outlet</th>
                                                                <td>{{$Karyawan->outlet->user->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Alamat Outlet</th>
                                                                <td>{{$Karyawan->outlet->alamat}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Jabatan</th>
                                                                <td>{{$Karyawan->jabatan->jabatan}}</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of table col-lg-6 -->

                                                <div class="col-lg-12 col-xl-6">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Status Kepegawaian</th>
                                                                @if($Karyawan->status_pkwt == 1)
                                                                <td><label class="label bg-success">Pegawai Tetap</label></td>
                                                                @else
                                                                <td><label class="label bg-primary">Pegawai Tidak Tetap</label></td>
                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Gaji Pokok</th>
                                                                <td>Rp.{{$Karyawan->jabatan->gajih}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Keterangan Tugas</th>
                                                                <td>{{$Karyawan->jabatan->tugas}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of table col-lg-6 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of general info -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>
                            <!-- end of view-info -->
                        </div>
                        <!-- end of card-block -->
                    </div>
                    <!-- end of card-->
                </div>
                <!-- end of tab pane question -->

                <!-- start memeber ship tab pane -->

                <div class="tab-pane" id="members" role="tabpanel">
                <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Riwayat Penilaian karyawan</h5>
                            <button id="edit-btn" type="button"
                                class="btn btn-primary waves-effect waves-light f-right">
                                <i class="icofont icofont-edit"></i>
                            </button>
                        </div>
                        <div class="card-block">
                            <div class="view-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                <table class="table table-hover" id="myTable">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kepribadian dan Prilaku</th>
                                                        <th>Prestasi Hasil Kerja</th>
                                                        <th>Periode</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1 ?>
                                                    @foreach($raport_karyawan as $d)
                                                    <tr>
                                                        <td>{{$no++}}</td>
                                                        <td>{{$d->kepribadian}}</td>
                                                        <td>{{$d->prestasi}}</td>
                                                        <td>{{$d->created_at->format('F Y')}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                                </div>
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of general info -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>
                            <!-- end of view-info -->
                        </div>
                        <!-- end of card-block -->
                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of memebership tab pane -->

            </div> 
            <!-- end of main tab content -->
        </div>
    </div>

</div>
<!-- Container-fluid ends -->

@endsection
