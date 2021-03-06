@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">
            <h4>Detail Outlet</h4>
            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Outlet</a>
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
                    <img class="img-fluid" src="{{asset('/images/outlet/'.$Outlet->foto)}}" alt="">
                    <div class="profile-hvr m-t-15">
                        <i class="icofont icofont-ui-edit p-r-10 c-pointer"></i>
                        <i class="icofont icofont-ui-delete c-pointer"></i>
                    </div>
                </div>
                <div class="card-block text-center">
                    <h4 class="f-18 f-normal m-b-10 txt-primary">{{ $Outlet->user->name }}</h4>
                    <a href="{{ route('outlet_profil_cetak', ['id' => IDCrypt::Encrypt( $Outlet->id)])}}"
                                        class="btn btn-block btn-primary"><i class="icon-printer"> Cetak Profil Outlet</i></a>

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
                        <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Data KFC</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#project" role="tab">Edit Data</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#members" role="tab">Karyawan</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#raport" role="tab">Raport Outlet</a>
                        <div class="slide"></div>
                    </li>
                </ul>
            </div>
            <!-- end of tab-header -->

                    <div class="tab-content">
                        <div class="tab-pane active" id="personal" role="tabpanel">
                            <div class="card">
                                <div class="card-header"><h5 class="card-header-text">About Me</h5>
                                    <button id="edit-btn" type="button" class="btn btn-primary waves-effect waves-light f-right" >
                                        <i  class="icofont icofont-edit"></i>
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
                                                                    <th scope="row">Nama Outlet</th>
                                                                    <td>{{ $Outlet->user->name }}</td>
                                                                </tr>
                                                                {{-- <tr>
                                                                    <th scope="row">Kecamatan</th>
                                                                    <td>{{ $Outlet->kecamatan->kecamatan }}</td>
                                                                </tr> --}}
                                                                <tr>
                                                                    <th scope="row">Alamat</th>
                                                                    <td>{{ $Outlet->alamat }}</td>
                                                                </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of table col-lg-6 -->

                                                <div class="col-lg-12 col-xl-6">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">No Telp</th>
                                                                <td>{{ $Outlet->telepon }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Jumlah Karyawan</th>
                                                                <td><a href="#!">{{$Karyawan->count()}} Orang</a></td>
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
                <!-- end of tab-pane -->
                <!-- end of about us tab-pane -->

                <!-- start tab-pane of project tab -->
                <div class="tab-pane" id="project" role="tabpanel">
                    <div class="row">
                        <!--input sizes starts-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Input Sizes</h5>
                                    <div class="f-right">
                                        <a href="" data-toggle="modal" data-target="#input-size-Modal"><i
                                                class="icofont icofont-code-alt"></i></a>
                                    </div>
                                </div>
                                <form method="post" action="" enctype="multipart/form-data">
                                    {{method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="card-block">
                                        <div class="form-group row">
                                            <div class="col-md-2"><label for="InputNormal"
                                                    class="form-control-label">Nama Outlet</label></div>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                    id="InputNormal" name="name" placeholder="Nama"
                                                    value="{{ $Outlet->user->name }}"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2"><label for="exampleSelect1"
                                                    class="form-control-label">kelurahan</label></div>
                                            <div class="col-md-10">
                                                <select class="form-control" id="exampleSelect1" name="kelurahan_id">
                                                @foreach($kelurahan as $d)
                                                    <option value="{{$d->id}}" {{ $Outlet->kelurahan_id  == $d->id ? 'selected' : ''}}>{{$d->kelurahan}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-2"><label for="InputNormal"
                                                    class="form-control-label">Alamat</label></div>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                    id="InputNormal" name="alamat" placeholder="Alamat"
                                                    value="{{ $Outlet->alamat }}"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2"><label for="InputNormal" class="form-control-label">No
                                                    Tlp</label></div>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                    id="InputNormal" name="telepon" value="{{ $Outlet->telepon }}"
                                                    placeholder="No.Tlp"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2"><label for="InputNormal" class="form-control-label">Email
                                                    </label></div>
                                            <div class="col-md-10"><input type="email" class="form-control"
                                                    id="InputNormal" name="email" value="{{ $Outlet->user->email }}"
                                                    placeholder="Email"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2"><label for="InputNormal"
                                                    class="form-control-label">Password</label></div>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                    id="InputNormal" name="password"
                                                    placeholder="Isi Jika ingin mengganti Password"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="file" class="col-md-2 col-form-label form-control-label">Gambar/Logo</label>
                                            <div class="col-md-9">
                                                <label for="file" class="custom-file">
                                                    <input type="file" name="foto" id="file" class="custom-file-input">
                                                    <span class="custom-file-control"></span>
                                                </label>
                                            </div>
                                    </div>
                                        {{ csrf_field() }}
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-inverse-primary">Ubah Data</button>
                                    </div>
                            </div>
                        </div>
                        <!--input sizes ends-->

                    </div>
                    <!-- end of card-main -->
                </div>
                <!-- end of project pane -->
                <!-- end of project pane -->

                <!-- start a question pane  -->

                <div class="tab-pane" id="members" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Project Details</h5>
                        </div>
                        <!-- end of card-header  -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="project-table">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center txt-primary pro-pic">Photo</th>
                                                    <th class="text-center txt-primary">Kode Karyawan</th>
                                                    <th class="text-center txt-primary">Nama Karyawan</th>
                                                    <th class="text-center txt-primary">Jenis Kelamin</th>
                                                    <th class="text-center txt-primary">Jabatan</th>
                                                    <th class="text-center txt-primary">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                            @foreach($Karyawan as $k)
                                                <tr>
                                                    <td>
                                                        <img src="/images/karyawan/{{$k->foto}}" class="img-circle">
                                                    </td>
                                                    <td>{{$k->kode_karyawan}}</td>
                                                    <td>{{$k->nama}}</td>
                                                    <td>{{$k->jenis_kelamin}}</td>
                                                    <td class="text-center">{{$k->jabatan->jabatan}}</td>
                                                    <td class="faq-table-btn">
                                                    <a href="{{route('karyawan_admin_detail',['id' => IDCrypt::Encrypt( $k->id)])}}"class="btn btn-inverse-primary"><i class="icon-eye" style="padding:0px;"></i></a>
                                                        <button type="button"
                                                            class="btn btn-inverse-danger waves-effect waves-light"
                                                            data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="icofont icofont-ui-delete"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!-- end of table -->
                                    </div>
                                    <!-- end of table responsive -->
                                </div>
                                <!-- end of project table -->
                            </div>
                            <!-- end of col-lg-12 -->
                        </div>
                        <!-- end of row -->
                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of memebership tab pane -->

                <!-- start memeber ship tab pane -->

                <div class="tab-pane" id="raport" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="card">
                                <div class="card-header"><h5 class="card-header-text">Riwayat Penilaian Outlet</h5>
                                    <button id="edit-btn" type="button" class="btn btn-primary waves-effect waves-light f-right" >
                                        <i  class="icofont icofont-edit"></i>
                                    </button>
                                </div>
                                <div class="card-block">
                                    <div class="view-info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="general-info">
                                                    <div class="row">
                                                    <table class="table table-hover" id="myTable">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Local Standard</th>
                                                        <th>Brand Standard</th>
                                                        <th>Food Safety</th>
                                                        <th>Periode</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1 ?>
                                                    @foreach($raport_outlet as $d)
                                                    <tr>
                                                        <td>{{$no++}}</td>
                                                        <td>
                                                        @if($d->local_standard == 1 )
                                                        <span class="label label-danger">Underperform</span>
                                                        @elseif($d->local_standard == 2)
                                                        <span class="label label-warning">Marginal</span>
                                                        @else 
                                                        <span class="label label-primary"> at Standard</span>
                                                        @endif
                                                        </td>
                                                        <td>
                                                        @if($d->brand_standard == 1 )
                                                        <span class="label label-danger">Underperform</span>
                                                        @elseif($d->brand_standard == 2)
                                                        <span class="label label-warning">Marginal</span>
                                                        @else
                                                        <span class="label label-primary"> at Standard</span>
                                                        @endif
                                                        </td>
                                                        <td>
                                                        @if($d->food_safety == 1 )
                                                        <span class="label label-danger">Underperform</span>
                                                        @elseif($d->food_safety == 2)
                                                        <span class="label label-warning">Marginal</span>
                                                        @else
                                                        <span class="label label-primary"> at Standard</span>
                                                        @endif
                                                        </td>
                                                        <td>{{$d->created_at->format('F Y')}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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
                            <!-- end of class questing -->
                        </div>
                        <!-- end of col-lg-12 -->
                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of tab pane question -->
                <!-- end of memebership tab pane -->

            </div>
            <!-- end of main tab content -->
        </div>
    </div>

</div>
<!-- Container-fluid ends -->

@endsection
