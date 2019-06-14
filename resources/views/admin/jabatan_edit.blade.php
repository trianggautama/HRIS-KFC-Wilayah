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
                    <h5 class="card-header-text">Input Sizes</h5>
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
                                    jabatan</label></div>
                            <div class="col-md-10"><input type="text" name="kode_jabatan" class="form-control"
                                    id="InputNormal" value="{{ $Jabatan->kode_jabatan }}" placeholder="Kode jabatan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama
                                    jabatan</label></div>
                            <div class="col-md-10"><input type="text" name="jabatan" class="form-control"
                                    id="InputNormal" value="{{ $Jabatan->jabatan }}" placeholder="jabatan"></div>
                        </div>
                        <label for="textArea1" class="form-control-label">Tugas Pokok</label>
                        <div class="md-input-wrapper">
                            <textarea name="tugas" id=""
                                class="md-form-control md-static">{{ $Jabatan->tugas }}</textarea>
                            {{-- <label>Tugas Pokok</label> --}}
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
