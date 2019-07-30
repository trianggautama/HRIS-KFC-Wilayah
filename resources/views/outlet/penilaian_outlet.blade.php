@extends('layouts.outlet')
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
                <a class="btn btn-success" href="{{Route('outlet_penilaian_outlet_cetak')}}"><i class="icon-printer"></i> cetak data</a>
                <a class="btn btn-success" href="{{Route('outlet_penilaian_outlet_filter_periode')}}"><i class="icon-printer"></i> cetak filter periode</a>
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
                                <th>Local Standard</th>
                                <th>Brand Standard</th>
                                <th>Food Safety</th>
                                <th>Periode</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach($raport_outlet as $d)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>
                                @if($d->local_standard == 1 )
                                <span class="label label-danger">Underperform</span>
                                @elseif($d->local_standard == 2)
                                <span class="label label-warning">Marginal</span>
                                @else
                                <span class="label label-primary"> at Standard</span>
                                @endif
                                </td>
                                <td>
                                @if($d->brand_standard == 1 )
                                <span class="label label-danger">Underperform</span>
                                @elseif($d->brand_standard == 2)
                                <span class="label label-warning">Marginal</span>
                                @else
                                <span class="label label-primary"> at Standard</span>
                                @endif
                                </td>
                                <td>
                                @if($d->food_safety == 1 )
                                <span class="label label-danger">Underperform</span>
                                @elseif($d->food_safety == 2)
                                <span class="label label-warning">Marginal</span>
                                @else
                                <span class="label label-primary"> at Standard</span>
                                @endif
                                </td>
                                <td>{{$d->created_at->format('F Y')}}</td>
                                <td class="text-center"> 
                                <a href="{{route('outlet_penilaian_outlet_detail', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-primary"> Detail</a>
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
