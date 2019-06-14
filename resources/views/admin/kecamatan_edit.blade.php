@extends('layouts.admin')
@section('content')
<br>
<div class="container-fluid">

    <!-- Row end -->
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

                <div class="card-block">
                    <form method="post" action="">
                        {{method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-md-2"><label for="InputNormal" class="form-control-label">Kode
                                    Kecamatan</label></div>
                            <div class="col-md-10"><input type="text" name="kode_kecamatan" class="form-control"
                                    id="InputNormal" value="{{ $kecamatan->kode_kecamatan }}"
                                    placeholder="Kode Kecamatan"></div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama
                                    Kecamatan</label></div>
                            <div class="col-md-10"><input type="text" name="kecamatan" class="form-control"
                                    id="InputNormal" value="{{ $kecamatan->kecamatan }}" placeholder="Nama Kecamatan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Kabupaten /
                                    Kota</label></div>
                            <div class="col-md-10"> <select class="form-control" id="exampleSelect1"
                                    name="kabupatenkota_id">
                                    @foreach ($kabupatenkota as $j)
                                    <option value="{{ $j->id}}"
                                        {{ $kecamatan->kabupatenkota_id == $j->id ? 'selected' : ''}}>
                                        {{$j->kabupatenkota}}</option>
                                    @endforeach
                                </select></div>
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
