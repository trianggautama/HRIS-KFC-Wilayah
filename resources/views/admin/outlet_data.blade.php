@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>
    <div class="card">
        <div class="card-header ">
            <h4>Data Kelurahan</h4>
            <div class="text-right">
                <a class="btn btn-inverse-success" href=""><i class="icon-arrow-add"></i>cetak data</a>
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
                        @foreach ($Outlet as $p)
                            <tr>
                                <td>{{$no = $no + 1}}</td>
                                <td>{{$p->user->name}}</td>
                                <td>{{$p->alamat}}</td>
                                <td>{{$p->telepon}}</td>
                                <td class="text-center">
                                    <a href="{{ route('outlet_detail', ['id' => IDCrypt::Encrypt( $p->id)])}}"
                                        class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top"
                                        title="Detail"><i class="icofont icofont-eye-alt"></i></a>

                                    <a href="{{ route('outlet_hapus', ['id' => IDCrypt::Encrypt( $p->id)])}}"
                                        class="btn btn-inverse-danger" data-toggle="tooltip" data-placement="top"
                                        title="hapus"><i class="icofont icofont-ui-delete"></i></a>
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
