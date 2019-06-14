@extends('layouts.outlet')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">
            <h4>Beranda</h4>
        </div>
    </div>
    <!-- 4-blocks row start -->
    <div class="row m-b-30 dashboard-header">
        <div class="col-lg-6 col-sm-12">
            <div class="col-sm-12 card dashboard-product">
                <span>Karyawan</span>
                <h2 class="dashboard-total-products counter">12</h2>
                <span class="label label-warning">Karyawan</span>
                <div class="side-box bg-warning">
                    <i class="icon-social-soundcloud"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="col-sm-12 card dashboard-product">
                <span>Karyawan</span>
                <h2 class="dashboard-total-products counter">penilaian Karyawan</h2>
                <span class="label label-primary">Karyawan</span>Seluruh Outlet
                <div class="side-box bg-primary">
                    <i class="icon-social-soundcloud"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pengumuman!
                </div>
                <div class="card-block">
                    <h5>Mohon untuk melengkapi data Profile Outlet Anda </h5>
                    <a href="{{route('edit_profil_outlet')}}" class="btn btn-sm btn-inverse-danger"> Disini</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 1-3-block row end -->

</div>

@endsection
