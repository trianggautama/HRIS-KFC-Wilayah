@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>

    <div class="card">
        <div class="card-header ">
                <h4>Data Outlet</h4>
                <div class="text-right">
                        <a class="btn btn-inverse-success" href=""><i class="icofont icofont-printer"></i> cetak data</a>
                    </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Outlet</th>
                            <th>Kecamatan</th>
                            <th>No Tlp</th>
                            <th class="text-center" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td> KFC Giant Extra</td>
                            <td>Sungai Andai</td>
                            <td>14234</td>
                            <td class="text-center">
                                <a href="{{route('outlet_detail')}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-eye-alt"></i></a>
                                <a href="" class="btn btn-inverse-danger" data-toggle="tooltip" data-placement="top" title="hapus"> <i class="icofont icofont-ui-delete"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>KFC Banjarbaru</td>
                            <td>Banjarbaru Utara</td>
                            <td>14221</td>
                            <td class="text-center">
                                <a href="{{route('outlet_detail')}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-eye-alt"></i></a>
                                <a href="" class="btn btn-inverse-danger" data-toggle="tooltip" data-placement="top" title="hapus"> <i class="icofont icofont-ui-delete"></i></a>
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
