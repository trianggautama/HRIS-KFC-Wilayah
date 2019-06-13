@extends('layouts.admin')
@section('content')
<br>
<div class="container-fluid">

 <!-- Row end -->
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
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Kode kabupaten/ kota</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Nama"></div>
                </div>

                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama kabupaten/ kota</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Isi Jika ingin mengganti Password"></div>
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
