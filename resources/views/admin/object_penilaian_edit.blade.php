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
                    <h5 class="card-header-text">Input Sizes</h5>
                    <div class="f-right">
                        <a href="" data-toggle="modal" data-target="#input-size-Modal"><i
                                class="icofont icofont-code-alt"></i></a>
                    </div>
                </div>
                <div class="card-block">
                <form method="post" action="">
                {{method_field('PUT') }}
                {{ csrf_field() }}
                    <div class="md-input-wrapper">
                        <input type="text" class="md-form-control md-static" name="object" value="{{$object_penilaian->object}}"/>
                        <label>Object Penilaian</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-inverse-danger" data-dismiss="modal">Batal</button>
                <input class="btn btn-inverse-primary" type="submit" name="submit" value="Ubah">
                {{csrf_field() }}
                </form>
                </div>
            </div>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>
@endsection
