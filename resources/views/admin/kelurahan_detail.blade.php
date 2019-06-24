@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">
        </div>
    </div>
    <div class="card">
        <div class="card-header ">
            <h4>Data Outlet pada Kelurahan (Nama kelurahan)</h4>
            <div class="text-right">
                <a class="btn btn-inverse-success" href="{{Route('cetak_outlet_keseluruhan')}}"><i class="icon-printer"></i> cetak data</a>
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
                                <th>Nama Outlet</th>
                                <th>Alamat</th>
                                <th>No Tlp</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 0 ?>
                            <tr>
                                <td>{{$no = $no + 1}}</td>
                                <td>KFC Qmall</td>
                                <td>Jl.Ayani km.40 qmall Banjarbaru</td>
                                <td>0871123</td>
                                <td class="text-center">
                                    <a href=""
                                        class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top"
                                        title="Detail"><i class="icon-eye"></i></a>

                                    <a href=""
                                        class="btn btn-inverse-danger" data-toggle="tooltip" data-placement="top"
                                        title="hapus"><i class="icon-trash"></i></a>
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
