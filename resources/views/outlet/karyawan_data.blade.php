@extends('layouts.outlet')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>
    <div class="card">
        <div class="card-header ">
            <h4>Data Karyawan</h4>
            <div class="text-right">
                    <a class="btn btn-inverse-primary right" href="" data-toggle="modal"
                    data-target="#exampleModalCenter"><i class="icofont icofont-ui-add"></i> tambah data</a>
                <a class="btn btn-inverse-success" href=""><i class="icofont icofont-printer"></i> cetak data</a>
            </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                            <tr>
                                    <th>No</th>
                                    <th>Kode Karyawan</th>
                                    <th>Nama Karyawan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No.Tlp</th>
                                    <th>Jabatan</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 ?>
                                    @foreach ($karyawan as $d)
                                <tr>
                                    <td>{{$no++}}</td>>
                                    <td>{{$d->kode_karyawan}}</td>
                                    <td>{{$d->nama}}</td>
                                    <td>{{$d->jenis_kelamin}}</td>
                                    <td>{{$d->telepon}}</td>
                                    <td>{{$d->jabatan->jabatan}}</td>
                                    <td class="text-center">
                                    {{-- <a href="{{route('karyawan_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-primary"> edit</a>
                                    <a href="{{route('karyawan_hapus', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-danger"> hapus</a> --}}
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
                        <input type="text" class="md-form-control md-static" name="kode_karyawan" value="{{ $kj }}" />
                        <label>Kode karyawan</label>
                    </div>
                    <div class="md-input-wrapper">
                        <input type="text" class="md-form-control md-static" name="karyawan" />
                        <label>Nama karyawan</label>
                    </div>
                    {{-- <div class="md-input-wrapper">
                        <select class="md-form-control" name="kabupatenkota_id">
                            <option>kabupaten/kota</option>
                            @foreach( $kabupatenkota as $kab )
                            <option value="{{$kab->id}}">{{$kab->kabupatenkota}} </option>
                            @endforeach
                        </select>
                    </div> --}}
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
