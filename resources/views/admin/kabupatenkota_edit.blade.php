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
            </div>
            <form  method="post" action="">
                {{method_field('PUT') }}
                {{ csrf_field() }}
            <div class="card-block">
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Kode kabupaten/ kota</label></div>
                    <div class="col-md-10"><input type="text" name="kode_kabupatenkota" class="form-control" id="InputNormal" value="{{$kabupatenkota->kode_kabupatenkota}}" ></div>
                </div>

                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama kabupaten/ kota</label></div>
                    <div class="col-md-10"><input type="text" name="kabupatenkota" class="form-control" id="InputNormal" value="{{$kabupatenkota->kabupatenkota}}"></div>
                </div>
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
