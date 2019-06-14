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
                            <th>No</th>
                            <th>Kode Jabatan</th>
                            <th>Nama Jabatan</th>
                            <th>Tugas</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php $no = 1 ?>
                          @foreach ($Jabatan as $d)
                      <tr>
                          <td>{{$no++}}</td>
                          <td>{{$d->kode_jabatan}}</td>
                          <td>{{$d->jabatan}}</td>
                          <td>{{$d->tugas}}</td>
                          <td class="text-center">
                          {{-- <a href="{{route('jabatan_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-primary"> edit</a>
                          <a href="{{route('jabatan_hapus', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-danger"> hapus</a> --}}
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
            <form  method="post" action="">
            <div class="md-input-wrapper">
                 <input type="text" name="kode_jabatan" class="md-form-control md-static" />
                    <label>Kode jabatan</label>
            </div>
            <div class="md-input-wrapper">
                 <input type="text" name="jabatan" class="md-form-control md-static" />
                    <label>Nama jabatan</label>
            </div>
            <div class="md-input-wrapper">
            <textarea name="tugas" id="" class="md-form-control md-static" ></textarea>    
            <label>Tugas Pokok</label>
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
<!-- content-wrapper ends -->
</div>
@endsection
