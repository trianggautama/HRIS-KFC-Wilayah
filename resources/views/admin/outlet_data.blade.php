@extends('layouts.admin')

@section('title', __('outlet.list'))

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>

    <div class="card">
        <div class="card-header ">
                <h4>Data Outlet</h4>
                <div class="text-right">
                        <a class="btn btn-inverse-success" href=""><i class="icofont icofont-printer"></i> cetak data</a>
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
                            <th>Nama Outlet</th>
                            <th>Kecamatan</th>
                            <th>No Tlp</th>
                            <th class="text-center" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td> KFC Giant Extra</td>
                            <td>Sungai Andai</td>
                            <td>14234</td>
                            <td class="text-center">
                                <a href="{{route('outlet_detail')}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-eye-alt"></i></a>
                                <a href="" class="btn btn-inverse-danger" data-toggle="tooltip" data-placement="top" title="hapus"> <i class="icofont icofont-ui-delete"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>KFC Banjarbaru</td>
                            <td>Banjarbaru Utara</td>
                            <td>14221</td>
                            <td class="text-center">
                                <a href="{{route('outlet_detail')}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-eye-alt"></i></a>
                                <a href="" class="btn btn-inverse-danger" data-toggle="tooltip" data-placement="top" title="hapus"> <i class="icofont icofont-ui-delete"></i></a>
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

            <div class="form-group">
                <label for="exampleInputEmail1" class="form-control-label">Nama Outlet</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Outlet">
            </div>
            <div class="form-group">
                <label for="exampleSelect1" class="form-control-label">Kecamatan</label>
                    <select class="form-control" id="exampleSelect1">
                        <option>Banjarbaru Selatan</option>
                        <option>Banjarbaru Utara</option>
                        <option>Cempaka</option>
                        <option>Landasan Ulin</option>
                        <option>Liang Anggang</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="exampleTextarea" class="form-control-label">Username</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nama Jabatan">
            </div>
            <div class="form-group">
                <label for="exampleTextarea" class="form-control-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nama Jabatan">
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
