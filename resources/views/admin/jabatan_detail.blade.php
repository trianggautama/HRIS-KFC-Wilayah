@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>
    <div class="card">
        <div class="card-header ">
            <h4>Data Detail Jabatan {{$jabatan->jabatan}}</h4>
            <div class="text-right">
                <a class="btn btn-success" href="{{route('cetak_jabatan_detail',['id' => IDCrypt::Encrypt( $jabatan->id)])}}"><i class="icofont icofont-printer"></i> cetak data</a>
            </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                @include('layouts.alert')
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Outlet</th>
                            <th>Kode Karyawan</th>
                            <th>Nama Karyawan</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach ($Karyawan as $d)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$d->outlet->user->name}}</td>
                            <td>{{$d->kode_karyawan}}</td>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->jenis_kelamin}}</td>
                            <td>{{$d->jabatan->jabatan}}</td>
                            <td class="text-center">
                            <a href="{{route('karyawan_detail',['id' => IDCrypt::Encrypt( $d->id)])}}"class="btn btn-primary"><i class="icon-eye" style="padding:0px;"></i></a>
                            <a href=""class="btn btn-danger"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
