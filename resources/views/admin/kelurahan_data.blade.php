@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>
    <div class="card">
        <div class="card-header ">
            <h4>Data Kelurahan</h4>
            <div class="text-right">
                <a class="btn btn-inverse-primary right" href="" data-toggle="modal"
                    data-target="#exampleModalCenter"><i class="icofont icofont-ui-add"></i> tambah data</a>
                <a class="btn btn-inverse-success" href=""><i class="icon-printer"></i>cetak data</a>
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
                                <th>Kode Jabatan</th>
                                <th>Nama Jabatan</th>
                                <th>Tugas</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach ($Kelurahan as $d)
                            <tr>
                            <td>{{$no++}}</td>
                                <td>{{$d->kode_kelurahan}}</td>
                                <td>{{$d->kelurahan}}</td>
                                <td>{{$d->Kecamatan->kecamatan}}</td>
                                <td class="text-center">
                                <a href="{{route('kelurahan_detail')}}"
                                        class="btn btn-inverse-success"><i class="icon-eye"></i></a>
                                <a href="{{route('kelurahan_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}"
                                        class="btn btn-inverse-primary"><i class="icon-pencil"></i></a>
                                    <a href="{{route('kelurahan_hapus', ['id' => IDCrypt::Encrypt( $d->id)])}}"
                                        class="btn btn-inverse-danger"><i class="icon-trash"></i></a>
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
                        <input type="text" name="kode_kelurahan" class="md-form-control md-static" />
                        <label>Kode kelurahan</label>
                    </div>
                    <div class="md-input-wrapper">
                        <input type="text" name="kelurahan" class="md-form-control md-static" />
                        <label>Nama kelurahan</label>
                    </div>
                    <div class="md-input-wrapper">
                        <select class="md-form-control" name="kecamatan_id">
                            <option>Kecamatan</option>
                            @foreach( $Kecamatan as $d )
                            <option value="{{$d->id}}">{{$d->kecamatan}} </option>
                            @endforeach
                        </select>
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
