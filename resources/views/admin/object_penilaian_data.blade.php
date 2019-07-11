@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>
    <div class="card">
        <div class="card-header ">
            <h4>Data Raport Outlet</h4>
            <div class="text-right">
            <a class="btn btn-inverse-primary right" href="" data-toggle="modal"
                    data-target="#exampleModalCenter"><i class="icofont icofont-ui-add"></i> tambah data</a>
                <a class="btn btn-inverse-success" href=""><i class="icon-printer"></i> cetak data</a>
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
                                <th  class="text-center">Objek</th>
                                <th  class="text-center">Bobot</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <tr>
                                <td>1</td>
                                <td  class="text-center">Kebersihan</td>
                                <td  class="text-center">4</td>
                                <td class="text-center">
                                    <a href="{{Route('object_penilaian_edit')}}" class="btn btn-inverse-primary"> edit</a>
                                    <a href="" class="btn btn-inverse-danger"> hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td  class="text-center">SOP</td>
                                <td  class="text-center">6</td>
                                <td class="text-center">
                                    <a href="{{Route('object_penilaian_edit')}}" class="btn btn-inverse-primary"> edit</a>
                                    <a href="" class="btn btn-inverse-danger"> hapus</a>
                                </td>
                            </tr>
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
                        <input type="text" class="md-form-control md-static" name="object" />
                        <label>Object Penilaian</label>
                    </div>
                    <div class="md-input-wrapper">
                        <input type="number" class="md-form-control md-static" name="kecamatan" />
                        <label>Bobot</label>
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