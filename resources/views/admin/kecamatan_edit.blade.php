@extends('layouts.admin')
@section('content')
<br>
<div class="container-fluid">

 <!-- Row end -->
 <div class="row">
    <!--input sizes starts-->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h5 class="card-header-text">Ubah Data</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>

            <div class="card-block">
                <form  method="post" action="">
                {{method_field('PUT') }}
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Kode Kecamatan</label></div>
<<<<<<< HEAD
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="kode kecamatan" value="{{$kecamatan->kode_kecamatan}}"></div>
=======
                    <div class="col-md-10"><input type="text" name="kode_kecamatan" class="form-control" id="InputNormal" value="{{ $Kecamatan->kode_kecamatan }}" placeholder="Kode Kecamatan"></div>
>>>>>>> d6c7a1e9258e5f322fde748e60829c3a6f28c529
                </div>

                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama Kecamatan</label></div>
<<<<<<< HEAD
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="nama kecamatan" value="{{$kecamatan->kecamatan}}"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><<label for="exampleSelect1" class="form-control-label">kecamatan</label></div>
                    <div class="col-md-10"> <select class="form-control" id="exampleSelect1">
                        <option>Banjarbaru</option>
                        <option>Banjarmasin</option>
                        <option>Kabupaten Banjar</option>
=======
                    <div class="col-md-10"><input type="text" name="kecamatan" class="form-control" id="InputNormal" value="{{ $Kecamatan->kecamatan }}" placeholder="Nama Kecamatan"></div>
                </div>
                <div class="form-group">
                <label for="exampleSelect1" class="form-control-label">Kabupaten / Kota</label>
                    <select class="form-control" id="exampleSelect1" name="kabupatenkota_id">
                        @foreach ($Kabupatenkota as $j)
                            <option value="{{ $j->id}}" {{ $Kecamatan->kabupatenkota_id == $j->id ? 'selected' : ''}}>{{$j->kabupatenkota}}</option>
                        @endforeach
>>>>>>> d6c7a1e9258e5f322fde748e60829c3a6f28c529
                    </select>
                </div>
                </div>
                <br>
                <div class="card-footer text-right">
                    {{csrf_field() }}
                    <input class="btn btn-primary mr-2" type="submit" name="submit" value="Ubah">
                </div>
            </div>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>
@endsection
