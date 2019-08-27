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
                    <h5 class="card-header-text">Edit Data</h5>
                    <div class="f-right">
                        <a href="" data-toggle="modal" data-target="#input-size-Modal"><i
                                class="icofont icofont-code-alt"></i></a>
                    </div>
                </div>
                <form  method="post" action="{{ route('admin_outlet_update', ['id' => IDCrypt::Encrypt( $outlet_datas->id)])}}" enctype="multipart/form-data">
                        {{method_field('PUT') }}
                            {{ csrf_field() }}
                <div class="card-block">
                @include('layouts.alert')
                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Alamat</label></div>
                        <div class="col-md-10"><textarea name="alamat" id="" class="form-control">{{ $outlet_datas->alamat }}</textarea></div>
                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Kelurahan</label></div>
                        <div class="col-md-10"> <select class="form-control" id="exampleSelect1"
                                name="kelurahan_id">
                                @foreach ($kelurahan as $j)
                                <option value="{{ $j->id}}"
                                    {{ $outlet_datas->kelurahan_id == $j->id ? 'selected' : ''}}>{{$j->kelurahan}}
                                </option>
                                @endforeach
                            </select></div>
                    </div>

                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">No Tlp</label></div>
                        <div class="col-md-10"><input name="telepon" type="text" class="form-control" id="InputNormal" value="{{ $outlet_datas->telepon }}" placeholder="No.Tlp"></div>
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
                    <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <!--input sizes ends-->

    </div>
    </div>
@endsection
