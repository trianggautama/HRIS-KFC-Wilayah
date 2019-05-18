@extends('layouts.admin')

@section('title', __('outlet.list'))

@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Profile</h4>
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
                            <img class="img-fluid" src="assets/images/social/profile.jpg" alt="">
                            <div class="profile-hvr m-t-15">
                                <i class="icofont icofont-ui-edit p-r-10 c-pointer"></i>
                                <i class="icofont icofont-ui-delete c-pointer"></i>
                            </div>
                        </div>
                        <div class="card-block text-center">
                            <h4 class="f-18 f-normal m-b-10 txt-primary">Tri Angga Tegar Utama</h4>
                            <h5 class="f-14">Supervisor</h5>
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
                                <div class="card-header"><h5 class="card-header-text">Biodata</h5>
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
                                                                    <th scope="row">Nama Lengkap</th>
                                                                    <td>Tri Angga Tegar Utama</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Jenis Kelamin</th>
                                                                    <td>Laki-laki</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Tanggal Lahir</th>
                                                                    <td>4 Maret 1997</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Status</th>
                                                                    <td>Belum Menikah</td>
                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->

                                                        <div class="col-lg-12 col-xl-6">
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">Alamat</th>
                                                                     <td>Jalan Ayani km.31 Komplek Chandra Utama No.39 </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Email</th>
                                                                    <td><a href="#!">trianggategarutama@gmail.com</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">No Tlp</th>
                                                                    <td>(0123) - 4567891</td>
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
                                            <div class="card-header"><h5 class="card-header-text">Input Sizes</h5>
                                                <div class="f-right">
                                                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                                                </div>
                                            </div>

                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama Pegawai</label></div>
                                                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Nama"></div>
                                                </div>
                                                <div class="form-group row">
                                                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Jenis Kelamin</label></div>
                                                        <div class="col-md-10">
                                                            <div class="form-check">
                                                                <label for="optionsRadios1" class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" valu6="option1" checked>
                                                                       Laki-laki
                                                                </label>
                                                            </div>
                                                             <div class="form-check">
                                                                <label for="optionsRadios2" class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                                                                        Perempuan
                                                                    </label>
                                                            </div></div>
                                                    </div>
                                   <div class="form-group row">
                                                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Tanggal Lahir</label></div>
                                                    <div class="col-md-10"><input type="date" class="form-control" id="InputNormal"  placeholder="Alamat"></div>
                                                </div>

                                                <div class="form-group row">
                                                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Status Menikah</label></div>
                                                        <div class="col-md-10">
                                                            <div class="form-check">
                                                                <label for="optionsRadios1" class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios3" valu6="option1" checked>
                                                                       Belum Menikah
                                                                </label>
                                                            </div>
                                                             <div class="form-check">
                                                                <label for="optionsRadios2" class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios4" value="option2">
                                                                        Sudah Menikah
                                                                    </label>
                                                            </div></div>
                                                    </div>
                                                    <div class="form-group row">
                                                            <div class="col-md-2"><label for="InputNormal" class="form-control-label">Alamat</label></div>
                                                            <div class="col-md-10"><textarea name="" id="" class="form-control" id="InputNormal"></textarea></div>
                                                        </div>
                                                <div class="form-group row">
                                                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Email</label></div>
                                                    <div class="col-md-10"><input type="email" class="form-control" id="InputNormal"  placeholder="No.Tlp"></div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">No Tlp</label></div>
                                                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="No.Tlp"></div>
                                                </div>
                                                <div class="form-group row">
                                                        <label for="file" class="col-md-2 col-form-label form-control-label">Foto Pegawai</label>
                                                        <div class="col-md-9">
                                                            <label for="file" class="custom-file">
                                                                <input type="file" id="file" class="custom-file-input">
                                                                <span class="custom-file-control"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Jabatan</label></div>
                                                        <div class="col-md-10">
                                                            <select class="form-control" id="exampleSelect1">
                                                                <option>Staff</option>
                                                                <option>Wakil Supervisor</option>
                                                                <option>Supervisor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Outlet</label></div>
                                                        <div class="col-md-10">
                                                            <select class="form-control" id="exampleSelect1">
                                                                <option>KFC QMALL</option>
                                                                <option>KFC BANJARBARU</option>
                                                                <option>KFC GIANT EXPRESS</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <a href="" class="btn btn-inverse-primary">Ubah Data</a>
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
                        <!-- start a question pane  -->
                        <div class="tab-pane" id="infokerja" role="tabpanel">
                                <div class="card">
                                    <div class="card-header"><h5 class="card-header-text">Info Pekerjaan</h5>
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
                                                                        <th scope="row">Outlet</th>
                                                                        <td>KFC Banjarbaru</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Alamat Outlet</th>
                                                                        <td>Jl.Pangeran Hidayatullah kelurahan Mentaos Banjarbaru Utara Banjarbaru,</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Jabatan</th>
                                                                        <td>Supervisor</td>
                                                                    </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->

                                                            <div class="col-lg-12 col-xl-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row">Gaji Pokok</th>
                                                                         <td>Rp.5.000.000</td>
                                                                    </tr>
                                                                    <tr>
                                                                            <th scope="row">Keterangan Tugas</th>
                                                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, sequi. Vero iste numquam molestiae non quibusdam aliquid necessitatibus, fugit cum ratione illo esse enim voluptates maxime cupiditate, totam, deserunt neque.</td>
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
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="card-member">
                                        <div class="accordion-box" id="member-open">
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">28 Februari 2018 : B</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">15 April 2018 : A</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">12 Juni 2018 : B</a>
                                            </div>
                                            <div class="faq-accordion">
                                                <a class="accordion-msg">20 Agustus 2018 : C</a>
                                            </div>
                                             <div class="faq-accordion">
                                                <a class="accordion-msg">10 Oktober 2018 : B</a>
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
                        <!-- end of memebership tab pane -->

                    </div>
                    <!-- end of main tab content -->
                </div>
            </div>

        </div>
        <!-- Container-fluid ends -->

@endsection
