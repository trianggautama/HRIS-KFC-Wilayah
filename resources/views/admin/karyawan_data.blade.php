@extends('layouts.admin')

@section('title', __('outlet.list'))

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>

    <div class="card">
        <div class="card-header ">
                <h4>Data Karyawan</h4>
                <div class="text-right">
                        <a class="btn btn-inverse-success" href=""><i class="icofont icofont-printer"></i> cetak data</a>
                        <a class="btn btn-inverse-primary right" href=""><i class="icofont icofont-ui-add"></i> tambah data</a>
                    </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Outlet</th>
                            <th>Kode Karyawan</th>
                            <th>Nama Karyawan</th>
                            <th>Jenis Kelamin</th>
                            <th>No.Tlp</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>KFC QMALL</td>
                            <td>F12S2</td>
                            <td>Angga</td>
                            <td>Laki-laki</td>
                            <td>0859685xxx</td>
                            <td class="text-center">
                            <a href="{{route('karyawan_detail')}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-eye-alt"></i></a>
                            <a href="" class="btn btn-inverse-danger"data-toggle="tooltip" data-placement="top" title="hapus"> <i class="icofont icofont-ui-delete"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>KFC GIANT EKSPRESS</td>
                            <td>H54A3</td>
                            <td>Zaini</td>
                            <td>Laki-laki</td>
                            <td>081254321xxx</td>
                            <td class="text-center">
                                <a href="{{route('karyawan_detail')}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-eye-alt"></i></a>
                                <a href="" class="btn btn-inverse-danger"data-toggle="tooltip" data-placement="top" title="hapus"> <i class="icofont icofont-ui-delete"></i></a>
                                </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
