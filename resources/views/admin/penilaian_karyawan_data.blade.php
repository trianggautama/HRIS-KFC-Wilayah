@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">
        </div>
    </div>
    <div class="card">
        <div class="card-header ">
            <h4>Data Raport karyawan</h4>
            <div class="text-right">
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
                            @foreach($raport_karyawan as $d)
                            <tr>
                                <td>1</td>
                                <td>{{$d->outlet->user->name}}</td>
                                <td>{{$d->karyawan->kode_karyawan}}</td>
                                <td>{{$d->karyawan->nama}}</td>
                                <td>
                                @if($d->nilai < 50 )
                                <span class="label label-danger">Kurang Baik</span>
                                @elseif($d->nilai < 85)
                                <span class="label label-warning">Baik</span>
                                @else
                                <span class="label label-primary"> Sangat Baik</span>
                                @endif
                                </td>
                                <td>{{$d->created_at->format('F Y')}}</td>
                                <td class="text-center">
                                <a href="#"
                                        class="btn btn-inverse-primary"><i class="icon-pencil"></i></a>     
                                    <a href="{{route('penilaian_karyawan_outlet_hapus',['id' => IDCrypt::Encrypt( $d->id)])}}"
                                        class="btn btn-inverse-danger"><i class="icon-trash"></i></a>                                </td>
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
