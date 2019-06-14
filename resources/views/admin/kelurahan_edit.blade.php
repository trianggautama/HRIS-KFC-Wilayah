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
                <form  method="post" action="">
                {{method_field('PUT') }}
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Kode kelurahan</label></div>
                    <div class="col-md-10"><input type="text" name="kode_kelurahan" class="form-control" id="InputNormal" value="{{ $Kelurahan->kode_kelurahan }}" placeholder="Kode Kelurahan"></div>
                </div>

                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama kelurahan</label></div>
                    <div class="col-md-10"><input type="text" name="kelurahan" class="form-control" id="InputNormal" value="{{ $Kelurahan->kelurahan }}" placeholder="Kelurahan"></div>
                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama Kecamatan</label></div>
                </div>
                <div class="md-input-wrapper">
                        <select class="md-form-control" name="kecamatan_id">
                            @foreach ($Kecamatan as $j)
                            <option value="{{ $j->id}}" {{ $Kelurahan->kecamatan_id == $j->id ? 'selected' : ''}}>{{$j->kecamatan}}</option>
                            @endforeach
                        </select>
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
