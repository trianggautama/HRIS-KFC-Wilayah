@extends('layouts.admin')

@section('title', __('outlet.list'))

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
                    <img class="img-fluid" src="assets/images/social/profile.jpg" alt="">
                    <div class="profile-hvr m-t-15">
                        <i class="icofont icofont-ui-edit p-r-10 c-pointer"></i>
                        <i class="icofont icofont-ui-delete c-pointer"></i>
                    </div>
                </div>
                <div class="card-block text-center">
                    <h4 class="f-18 f-normal m-b-10 txt-primary">{{ $User->name }}</h4>

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
                                                                    <td>{{ $User->name }}</td>
                                                                </tr>
                                                                {{-- <tr>
                                                                    <th scope="row">Kecamatan</th>
                                                                    <td>{{ $Outlet->kecamatan->kecamatan }}</td>
                                                                </tr> --}}
                                                                <tr>
                                                                    <th scope="row">Alamat</th>
                                                                    <td>{{ $Outlet->alamat }} Kecamatan {{ $Outlet->kecamatan->kecamatan }}</td>
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
                                                                <td><a href="#!">12 Orang</a></td>
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
                                <form method="post" action="">
                                    {{method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="card-block">
                                        <div class="form-group row">
                                            <div class="col-md-2"><label for="InputNormal"
                                                    class="form-control-label">Nama Outlet</label></div>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                    id="InputNormal" name="name" placeholder="Nama"
                                                    value="{{ $User->name }}"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2"><label for="exampleSelect1"
                                                    class="form-control-label">Kecamatan</label></div>
                                            <div class="col-md-10">
                                                <select class="form-control" id="exampleSelect1">
                                                    <option>Banjarbaru Utara</option>
                                                    <option>Banjarbaru Selatan</option>
                                                    <option>Sungai Andai</option>
                                                    <option>Banjarmasin</option>
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
                                            <div class="col-md-2"><label for="InputNormal" class="form-control-label">No
                                                    Tlp</label></div>
                                            <div class="col-md-10"><input type="email" class="form-control"
                                                    id="InputNormal" name="email" value="{{ $User->email }}"
                                                    placeholder="Email"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2"><label for="InputNormal"
                                                    class="form-control-label">Password</label></div>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                    id="InputNormal" name="password"
                                                    placeholder="Isi Jika ingin mengganti Password"></div>
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
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/avatar-2.png" class="img-circle"
                                                            alt="tbl">
                                                    </td>
                                                    <td>F12S2</td>
                                                    <td>Angga</td>
                                                    <td>Laki-laki</td>
                                                    <td class="text-center">Supervisor</td>
                                                    <td class="faq-table-btn">
                                                        <button type="button"
                                                            class="btn btn-inverse-success waves-effect waves-light"
                                                            data-toggle="tooltip" data-placement="top" title="View">
                                                            <i class="icofont icofont-eye-alt"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-inverse-danger waves-effect waves-light"
                                                            data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="icofont icofont-ui-delete"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/avatar-2.png" class="img-circle"
                                                            alt="tbl">
                                                    </td>
                                                    <td>H54A3</td>
                                                    <td>Zaini</td>
                                                    <td>Laki-laki</td>
                                                    <td class="text-center">staff</td>
                                                    <td class="faq-table-btn">
                                                        <button type="button"
                                                            class="btn btn-inverse-success waves-effect waves-light"
                                                            data-toggle="tooltip" data-placement="top" title="View">
                                                            <i class="icofont icofont-eye-alt"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-inverse-danger waves-effect waves-light"
                                                            data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="icofont icofont-ui-delete"></i>
                                                        </button>
                                                    </td>
                                                </tr>
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
                            <div class="card-questioning">
                                <div class="accordion-box" id="question-open">
                                    <div class="faq-accordion">
                                        <a class="accordion-msg active"> 8 Desember 2018 : B</a>
                                    </div>
                                    <div class="faq-accordion">
                                        <a class="accordion-msg">6 Juni 2018 : A</a>
                                    </div>

                                    <div class="faq-accordion">
                                        <a class="accordion-msg">14 Desember 2017 : B</a>
                                    </div>
                                </div>
                                <!-- end of accrodion box class -->
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
