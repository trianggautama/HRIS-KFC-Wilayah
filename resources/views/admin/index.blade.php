@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">
            <h4>Beranda</h4>
        </div>
    </div>
    <!-- 4-blocks row start -->
    <div class="row m-b-30 dashboard-header">
        <div class="col-lg-3 col-sm-6">
            <div class="col-sm-12 card dashboard-product">
                <span>Outlets</span>
                <h2 class="dashboard-total-products counter">{{$outlet->count()}}</h2>
                <span class="label label-warning">Outlet</span>Wilayah Kalsel
                <div class="side-box bg-warning">
                    <i class="icon-social-soundcloud"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="col-sm-12 card dashboard-product">
                <span>Karyawan</span>
                <h2 class="dashboard-total-products counter">{{$karyawan->count()}}</h2>
                <span class="label label-primary">Karyawan</span>Seluruh Outlet
                <div class="side-box bg-primary">
                    <i class="icon-social-soundcloud"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="col-sm-12 card dashboard-product">
                <span>Penilaian Outlet</span>
                <h2 class="dashboard-total-products"><span class="counter">{{$raport_outlet->count()}}</span></h2>
                <span class="label label-success">Data</span>Penilaian
                <div class="side-box bg-success">
                    <i class="icon-bubbles"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="col-sm-12 card dashboard-product">
                <span>Penilaian Karyawan</span>
                <h2 class="dashboard-total-products"><span class="counter">{{$raport_karyawan->count()}}</span></h2>
                <span class="label label-danger">Data</span>Penilaian
                <div class="side-box bg-danger">
                    <i class="icon-bubbles"></i>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- 1-3-block row end -->

</div>
@endsection
