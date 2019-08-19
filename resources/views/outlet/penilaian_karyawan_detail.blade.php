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
                    <h5 class="card-header-text">Detail Raport Karyawan</h5>
                    <div class="f-right">
                        <a href="" data-toggle="modal" data-target="#input-size-Modal"><i
                                class="icofont icofont-code-alt"></i></a>
                    </div>
                </div>
                <div class="card-block">
                <div class="form-group row">
                        <div class="col-md-3"><label for="InputNormal" class="form-control-label">kepribadian dan Prilaku</label></div>
                        <div class="col-md-9">: {{$raport_karyawan->kepribadian}}</div>
                </div>
                <div class="form-group row">
                        <div class="col-md-3"><label for="InputNormal" class="form-control-label">Kedisiplinan</label></div>
                        <div class="col-md-9">: {{$raport_karyawan->kedisiplinan}}</div>
                </div>
                <div class="form-group row">
                        <div class="col-md-3"><label for="InputNormal" class="form-control-label">tanggung Jawab</label></div>
                        <div class="col-md-9">: {{$raport_karyawan->tanggung_jawab}}</div>
                </div>
                <div class="form-group row">
                        <div class="col-md-3"><label for="InputNormal" class="form-control-label">tanggung Jawab</label></div>
                        <div class="col-md-9">: {{$raport_karyawan->tanggung_jawab}}</div>
                </div>
                <div class="form-group row">
                        <div class="col-md-3"><label for="InputNormal" class="form-control-label">Komunikasi</label></div>
                        <div class="col-md-9">: {{$raport_karyawan->komunikasi}}</div>
                </div>
                <hr>
                <div class="form-group row">
                        <div class="col-md-3"><label for="InputNormal" class="form-control-label">Prestasi dan Hasil Kerja</label></div>
                        <div class="col-md-9">: {{$raport_karyawan->prestasi}}</div>
                </div>
                <div class="form-group row">
                        <div class="col-md-3"><label for="InputNormal" class="form-control-label">pelayanan pada Customer</label></div>
                        <div class="col-md-9">: {{$raport_karyawan->pelayanan}}</div>
                </div>
                <div class="form-group row">
                        <div class="col-md-3"><label for="InputNormal" class="form-control-label">Efisiensi dan Efektifitas Kerja</label></div>
                        <div class="col-md-9">: {{$raport_karyawan->efisiensi}}</div>
                </div>
                <div class="form-group row">
                        <div class="col-md-3"><label for="InputNormal" class="form-control-label">Ketetapan dalam bekerja</label></div>
                        <div class="col-md-9">: {{$raport_karyawan->ketetapan}}</div>
                </div>
                <div class="form-group row">
                        <div class="col-md-3"><label for="InputNormal" class="form-control-label">Pengaturan Waktu Kerja</label></div>
                        <div class="col-md-9">: {{$raport_karyawan->pengaturan_waktu}}</div>
                </div>
                </div>
            </div>
        </div>
        <!--input sizes ends-->

    </div>
    </div>
@endsection
