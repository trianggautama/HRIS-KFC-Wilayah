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
                    <h5 class="card-header-text">Objek Penilaian</h5>
                    <div class="f-right">
                        <a href="" data-toggle="modal" data-target="#input-size-Modal"><i
                                class="icofont icofont-code-alt"></i></a>
                    </div>
                </div>
                <div class="card-block">
                    <form method="post" action="">
                        <!--inputannya di loop aja sesuai data objek penilaian-->
                        @foreach( $object_penilaian as $d)
                        <div class="form-group row">
                            <div class="col-md-2"><label for="InputNormal" class="form-control-label">{{$d->object}}</label></div>
                            <div class="col-md-10"><input type="text"
                                    name="{{$d->object}}" class="form-control"
                                    id="InputNormal" value="" placeholder="0-100">
                            </div>
                        </div>
                        @endforeach
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
