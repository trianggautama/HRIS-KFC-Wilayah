@extends('layouts.outlet')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">
        </div>
    </div>
    <div class="card">
        <div class="card-header ">
            <h4>Data Raport Karyawan</h4>
            <div class="text-right">
            <a class="btn btn-inverse-primary" href="{{Route('outlet_penilaian_karyawan_tambah')}}"><i class="icon-arrow-add"></i>+ Tambah Data</a>
                <a class="btn btn-inverse-success" href=""><i class="icon-arrow-add"></i>Cetak Data</a>
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
                                <th>Nilai</th>
                                <th>Periode</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <tr>
                                <td>1</td>
                                <td>KFC BOX GIANT</td>
                                <td>A12Q21</td>
                                <td>Muhammad Zaini</td>
                                <td><span class="label label-success">Baik</span></td>
                                <td>Maret 2019</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-inverse-primary"> edit</a>
                                    <a href="" class="btn btn-inverse-danger"> hapus</a>
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
