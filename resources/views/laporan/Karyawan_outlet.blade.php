<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-family:sans-serif;
        }
          table{
        border-collapse: collapse;
        width:100%;
      }
         table, th, td{
        border: 1px solid black;
      }
      th{
        background-color: #e6501e;
        text-align: center;
        color: white;
      }
      td{
      }
      br{
          margin-bottom: 5px !important;
      }
     .judul{
         text-align: center;
     }
     .header{
         margin-bottom: 0px;
         text-align: center;
         height: 150px;
         padding: 0px;
     }
     .pemko{
         width:70px;
     }
     .logo{
         float: left;
         margin-right: 0px;
         width: 15%;
         padding:0px;
         text-align: right;
     }
     .headtext{
         float:right;
         margin-left: 0px;
         width: 75%;
         padding-left:0px;
         padding-right:10%;
     }
     hr{
         margin-top: 10%;
         height: 3px;
         background-color: black;
         width:100%;
     }
     .ttd{
         margin-left:70%;
         text-align: center;
         text-transform: uppercase;
     }

     .text-center{
         text-align:center;
     }
    </style>
</head>
<body>
    <div class="header">
            <div class="logo">
                    <img  class="pemko" src="images/kfc_logo.png"  >
            </div>
            <div class="headtext">
                <h3 style="margin:0px;">KFC WILAYAH </h3>
                <h1 style="margin:0px;">KALIMANTAN SELATAN</h1>
                <p style="margin:0px;">Alamat : jl.lambung mangkurat no.19 kertak baru ilir ,kec.Banjarmasin tengah,kota Banjarmasin,kalimantan selatan 70111</p>
            </div>
            <br>
            <hr>
    </div>

    <div class="container">
        <div class="isi">
            <h2 style="text-align:center;">DATA KARYAWAN PADA OUTLET {{$outlet->user->name}}</h2>
            <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>No</th>
                                <th class="text-center">Kode Karyawan</th>
                                <th>Nama Karyawan</th>
                                <th class="text-center">Jabatan</th>
                                <th class="text-center">Status Pegawai</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1 ?>
                        @foreach($karyawan as $d)
                            <tr>
                                <td class="text-center">{{$no++}}</td>
                                <td class="text-center">{{$d->kode_karyawan}}</td>
                                <td>{{$d->nama}}</td>
                                <td>{{$d->jabatan->jabatan}}</td>
                                @if($d->status_pkwt == 1)
                                <td class="text-center"> Tetap</td>
                                @else
                                <td class="text-center"> Tidak Tetap</td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                      <br>
                      <br>
                      <div class="ttd">
                        <h5> <p>{{$tgl}}</p></h5>
                      <h5>pimpinan</h5>
                      <br>
                      <br>
                      <h5 style="text-decoration:underline;">nama pimpinan</h5>
                      </div>
                    </div>
             </div>
         </body>
</html>
