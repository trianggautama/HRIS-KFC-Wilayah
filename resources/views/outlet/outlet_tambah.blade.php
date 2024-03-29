@extends('layouts.outlet')
@section('content')
<br>
<div class="container-fluid">

    <!-- Row end -->
    <div class="row">
        <!--input sizes starts-->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Lengkapi Data</h5>
                    <div class="f-right">
                        <a href="" data-toggle="modal" data-target="#input-size-Modal"><i
                                class="icofont icofont-code-alt"></i></a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama Outlet</label>
                        </div>
                        <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"
                                placeholder="Nama"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Kecamatan</label>
                        </div>
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
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Alamat</label></div>
                        <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"
                                placeholder="Alamat"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">No Tlp</label></div>
                        <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"
                                placeholder="No.Tlp"></div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="" class="btn btn-inverse-primary">Ubah Data</a>
                    </div>
                </div>
            </div>
        </div>
        <!--input sizes ends-->

    </div>
</div>
@endsection
