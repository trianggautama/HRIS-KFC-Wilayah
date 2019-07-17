@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>
    <div class="card">
        <div class="card-header ">
            <h4>Data Raport Outlet</h4>
            <div class="text-right">
                <a class="btn btn-inverse-primary right" href="{{Route('penilaian_outlet_tambah')}}"><i
                        class="icofont icofont-ui-add"></i> tambah data</a>
                <a class="btn btn-inverse-success" href=""><i class="icon-printer"></i> cetak data</a>
                <a class="btn btn-inverse-success" href="{{Route('penilaian_outlet_filter_periode')}}"><i class="icon-printer"></i> cetak filter periode</a>
                <a class="btn btn-inverse-success" href="{{Route('penilaian_outlet_filter_outlet')}}"><i class="icon-printer"></i> cetak filter outlet</a>
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
                                <th>Nilai</th>
                                <th>Periode</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach($raport_outlet as $d)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$d->outlet->user->name}}</td>
                                <td>
                                @if($d->nilai < 30 )
                                <span class="label label-danger">Kurang Baik</span>
                                @elseif($d->nilai < 60)
                                <span class="label label-warning">Baik</span>
                                @else
                                <span class="label label-primary"> Sangat Baik</span>
                                @endif
                                </td>
                                <td>{{$d->created_at}}</td>
                                <td class="text-center">
                                    <a href="{{route('penilaian_outlet_hapus', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-danger"> hapus</a>
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
