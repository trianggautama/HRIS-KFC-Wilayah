@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">
        </div>
    </div>
    <div class="card">
        <div class="card-header ">
            <h4>Data Kabupaten Kota</h4>
            <div class="text-right">
                <a class="btn btn-inverse-primary right" href="" data-toggle="modal"
                    data-target="#exampleModalCenter"><i class="icofont icofont-ui-add"></i> tambah data</a>
            </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                @include('layouts.alert')
                    <table class="table table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode kabupaten/kota</th>
                                <th>Nama kabupaten/kota</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach ($kabupatenkota as $k)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$k->kode_kabupatenkota}}</td>
                                <td>{{$k->kabupatenkota}} </td>
                                <td class="text-center">
                                    <a href="{{route('kabupatenkota_edit', ['id' => IDCrypt::Encrypt( $k->id)])}}"
                                        class="btn btn-inverse-primary"><i class="icon-pencil"></i> </a>
                                    <a href="{{route('kabupatenkota_hapus', ['id' => IDCrypt::Encrypt( $k->id)])}}"
                                        class="btn btn-inverse-danger"><i class="icon-trash"></i> </a>
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
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="md-input-wrapper">
                        <input type="text" name="kode_kabupatenkota" class="md-form-control md-static" />
                        <label>Kode Kabupaten/Kota</label>
                    </div>
                    <div class="md-input-wrapper">
                        <input type="text" name="kabupatenkota" class="md-form-control md-static" />
                        <label>Nama Kabupaten/Kota</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-inverse-danger" data-dismiss="modal">Close</button>
                <input class="btn btn-inverse-primary" type="submit" name="submit" value="Save">
                {{csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
