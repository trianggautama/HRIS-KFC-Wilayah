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
                <a class="btn btn-inverse-primary right" href="" data-toggle="modal" data-target="#exampleModalCenter"><i class="icofont icofont-ui-add"></i> tambah data</a>
                        <a class="btn btn-inverse-success" href=""><i class="icon-arrow-add"></i>cetak data</a>
                    </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
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
                        <tr>
                            <td>1</td>
                            <td>K12`1</td>
                            <td>Kota Banjarbaru </td>
                            <td class="text-center">
                            <a href="{{route('kabupatenkota_edit')}}" class="btn btn-inverse-primary"> edit</a>
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
                            <label>Kode Kabupaten/Kota</label>
                        </div>
                        <div class="md-input-wrapper">
                            <input type="text" class="md-form-control md-static" />
                            <label>Nama Kabupaten/Kota</label>
                        </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-inverse-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-inverse-primary">Save changes</button>
            </form>
            </div>
          </div>
        </div>
      </div>

@endsection