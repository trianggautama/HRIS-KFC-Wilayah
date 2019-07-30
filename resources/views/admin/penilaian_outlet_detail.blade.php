@extends('layouts.admin')
@section('content')
<br>
<div class="container-fluid">

    <!-- Row end -->
    <div class="row">
        <!--input sizes starts-->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Detail Raport Outlet</h5>
                    <div class="f-right">
                        <a href="" data-toggle="modal" data-target="#input-size-Modal"><i
                                class="icofont icofont-code-alt"></i></a>
                    </div>
                </div>
                <div class="card-block">
                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">local Standard</label></div>
                        <div class="col-md-10"> @if($raport_outlet->local_standard == 1 )
                                <span class="label label-danger">Underperform</span>
                                @elseif($raport_outlet->raport_outlet == 2)
                                <span class="label label-warning">Marginal</span>
                                @else
                                <span class="label label-primary"> at Standard</span>
                                @endif
                                 <p>: {{$raport_outlet->keterangan_local_standard}}</p>
                                </div>
                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Brand Standard</label></div>
                        <div class="col-md-10"> @if($raport_outlet->brand_standard == 1 )
                                <span class="label label-danger">Underperform</span>
                                @elseif($raport_outlet->brand_standard == 2)
                                <span class="label label-warning">Marginal</span>
                                @else
                                <span class="label label-primary"> at Standard</span>
                                @endif
                                <br>
                                 <p>: {{$raport_outlet->keterangan_brand_standard}}</p>
                                </div>

                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Food Safety</label></div>
                        <div class="col-md-10"> @if($raport_outlet->food_safety == 1 )
                                <span class="label label-danger">Underperform</span>
                                @elseif($raport_outlet->food_safety == 2)
                                <span class="label label-warning">Marginal</span>
                                @else
                                <span class="label label-primary"> at Standard</span>
                                @endif
                                <br>
                                <p>: {{$raport_outlet->keterangan_food_safety}}</p>
                                </div>
                </div>
                </div>
            </div>
        </div>
        <!--input sizes ends-->

    </div>
    </div>
@endsection
