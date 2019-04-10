@extends('layouts.admin')

@section('title', __('outlet.list'))

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
                        <h2 class="dashboard-total-products counter">12</h2>
                        <span class="label label-warning">Outlet</span>Wilayah Kalsel-teng
                        <div class="side-box bg-warning">
                            <i class="icon-social-soundcloud"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Karyawan</span>
                        <h2 class="dashboard-total-products counter">102</h2>
                        <span class="label label-primary">Karyawan</span>Seluruh Outlet
                        <div class="side-box bg-primary">
                            <i class="icon-social-soundcloud"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Admin</span>
                        <h2 class="dashboard-total-products"><span class="counter">12</span></h2>
                        <span class="label label-success">Admin</span>pada seluruh Outlet
                        <div class="side-box bg-success">
                            <i class="icon-bubbles"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Admin</span>
                        <h2 class="dashboard-total-products"><span class="counter">4</span></h2>
                        <span class="label label-danger">Admin</span>Kantor Wilayah
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
