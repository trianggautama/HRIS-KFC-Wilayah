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
                    <h5 class="card-header-text">Penilaian Outlet</h5>
                    <div class="f-right">
                        <a href="" data-toggle="modal" data-target="#input-size-Modal"><i
                                class="icofont icofont-code-alt"></i></a>
                    </div>
                </div>
                <div class="card-block">
                @include('layouts.alert')
                    <form method="post" action="">
                        <!--inputannya di loop aja sesuai data objek penilaian-->
                     <div class="form-group row">
                            <div class="col-md-2"><label for="InputNormal" class="form-control-label">Outlet</label></div>
                            <div class="col-md-10">
                            <select class="form-control" name="outlet_id">
                            <option value="" >-Pilih Outlet-</option>
                            @foreach($outlet as $d)
                            <option value="{{$d->id}}">{{$d->user->name}}</option>
                            @endforeach
                        </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label for="InputNormal" class="form-control-label">local Standard</label></div>
                            <div class="col-md-10">
                                <input type="number" class="form-control" name="lokal_standard_1" placeholder="jumlah temuan lv 1">
                                <br>
                                <input type="number" class="form-control" name="lokal_standard_2" placeholder="jumlah temuan lv 2">
                                <br>
                                <input type="number" class="form-control" name="lokal_standard_3" placeholder="jumlah temuan lv 3">
                                <br>
                                <textarea name="keterangan_lokal_standard" id="" class="form-control" placeholder="keterangan temuan"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-2"><label for="InputNormal" class="form-control-label">Brand Standard</label></div>
                            <div class="col-md-10">
                                <input type="number" class="form-control" name="brand_standard_1" placeholder="jumlah temuan lv 1">
                                <br>
                                <input type="number" class="form-control" name="brand_standard_2" placeholder="jumlah temuan lv 2">
                                <br>
                                <input type="number" class="form-control" name="brand_standard_3" placeholder="jumlah temuan lv 3">
                                <br>
                                <textarea name="keterangan_brand_standard" id="" class="form-control" placeholder="keterangan temuan"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-2"><label for="InputNormal" class="form-control-label">Food Safety</label></div>
                            <div class="col-md-10">
                                <input type="number" class="form-control" name="food_safety_1" placeholder="jumlah temuan lv 1">
                                <br>
                                <input type="number" class="form-control" name="food_safety_2" placeholder="jumlah temuan lv 2">
                                <br>
                                <input type="number" class="form-control" name="food_safety_3" placeholder="jumlah temuan lv 3">
                                <br>
                                <textarea name="keterangan_food_safety" id="" class="form-control" placeholder="keterangan temuan"></textarea>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            {{csrf_field() }}
                            <input class="btn btn-primary mr-2" type="submit" name="submit" value="Simpan Penilaian">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>
@endsection
