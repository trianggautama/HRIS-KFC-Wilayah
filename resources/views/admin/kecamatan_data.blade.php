@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">
        </div>
    </div>
    <div class="card">
        <div class="card-header ">
            <h4>Data Kecamatan</h4>
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
                                <th>Kode Kecamatan</th>
                                <th>Nama Kecamatan</th>
                                <th>Kabupaten / Kota</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach ($kecamatan as $kec)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$kec->kode_kecamatan}}</td>
                                <td>{{$kec->kecamatan}}</td>
                                <td>{{$kec->kabupatenkota->kabupatenkota}}</td>
                                <td class="text-center">
                                <a href="{{route('kecamatan_detail')}}"
                                        class="btn btn-inverse-success"><i class="icon-eye"></i></a>
                                    <a href="{{route('kecamatan_edit', ['id' => IDCrypt::Encrypt( $kec->id)])}}"
                                        class="btn btn-inverse-primary"><i class="icon-pencil"></i></a>
                                    <a href="{{route('kecamatan_hapus', ['id' => IDCrypt::Encrypt( $kec->id)])}}"
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
                        <input type="text" class="md-form-control md-static" name="kode_kecamatan" />
                        <label>Kode Kecamatan</label>
                    </div>
                    <div class="md-input-wrapper">
                        <input type="text" class="md-form-control md-static" name="kecamatan" />
                        <label>Nama Kecamatan</label>
                    </div>
                    <div class="md-input-wrapper">
                        <select class="md-form-control" name="kabupatenkota_id">
                            <option>kabupaten/kota</option>
                            @foreach( $kabupatenkota as $kab )
                            <option value="{{$kab->id}}">{{$kab->kabupatenkota}} </option>
                            @endforeach
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-inverse-danger" data-dismiss="modal">Batal</button>
                <input class="btn btn-inverse-primary" type="submit" name="submit" value="Simpan">
                {{csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
