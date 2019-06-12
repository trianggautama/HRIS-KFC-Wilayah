@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>

    <div class="card">
        <div class="card-header ">
                <h4>Data Jabatan</h4>
                <div class="text-right">
                    <a class="btn btn-inverse-success" href="" ><i class="icofont icofont-printer"></i> cetak data</a>
                    <a class="btn btn-inverse-primary right" href="" data-toggle="modal" data-target="#exampleModalCenter"><i class="icofont icofont-ui-add"></i> tambah data</a>
                </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Jabatan</th>
                            <th>Nama Jabatan</th>
                            <th>Tugas</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>SK01</td>
                            <td>Staf Kasir</td>
                            <td>Transaksi Pembeli</td>
                            <td class="text-center">
                                <a href="{{route('karyawan_detail')}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-eye-alt"></i></a>
                                <a href="" class="btn btn-inverse-danger"data-toggle="tooltip" data-placement="top" title="hapus"> <i class="icofont icofont-ui-delete"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>SV02</td>
                            <td>Supervisor</td>
                            <td>Penanggung Jawab</td>
                            <td class="text-center">
                                <a href="{{route('karyawan_detail')}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-eye-alt"></i></a>
                                <a href="" class="btn btn-inverse-danger"data-toggle="tooltip" data-placement="top" title="hapus"> <i class="icofont icofont-ui-delete"></i></a>
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
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="md-input-wrapper">
                 <input type="text" class="md-form-control md-static" />
                    <label>Kode jabatan</label>
            </div>
            <div class="md-input-wrapper">
                 <input type="text" class="md-form-control md-static" />
                    <label>Nama jabatan</label>
            </div>
            <div class="md-input-wrapper">
            <textarea name="" id="" class="md-form-control md-static" ></textarea>    
            <label>Tugas Pokok</label>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-inverse-danger" data-dismiss="modal"> <i class="icofont icofont-ui-close"></i> Close</button>
          <button type="button" class="btn btn-inverse-primary"> <i class="icofont icofont-save"></i> Save changes</button>
        </form>
        </div>
      </div>
    </div>
  </div>
<!-- content-wrapper ends -->
</div>
@endsection
