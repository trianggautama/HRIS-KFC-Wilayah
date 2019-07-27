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
      }
      th{
        background-color: #708090;
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
            <br>
            <hr>
    </div>
    <div class="container">
        <div class="isi">
            <h2 style="text-align:center; margin:5px;">PROFIL KARYAWAN </h2>
            <br>
            <table style="margin-bottom:20px;">
                <tr>
                    <td style="width:320px;  text-align: center;">
                        <img style="width:100%; height:auto margin:auto;" src="images/karyawan/{{$Karyawan->foto}}">
                    </td>
                    <td style="padding-left:30px !mportant; width:40%;">
                        <h4>Data Pribadi</h4>
                        <h5>Kode Karyawan</h5>
                        <h5>Nama Karyawan </h5>
                        <h5>Jenis Kelamin </h5>
                        <h5>Tanggal Lahir  </h5>
                        <h5>Nomor Telepon  </h5>
                        <h4>Data Kepegawaian</h4>
                        <h5>Status  Kepegawaian</h5>
                        <h5>Jabatan</h5>
                        <h5>Tanggal Masuk</h5>
                    </td>
                    <td>
                    <h4>-</h4>
                    <h5> : {{$Karyawan->kode_karyawan}}</h5>
                    <h5> : {{$Karyawan->nama}}</h5>
                    <h5> : {{$Karyawan->jenis_kelamin}}</h5>
                    <h5> : {{$Karyawan->tanggal_lahir}}</h5>
                    <h5> : {{$Karyawan->telepon}}</h5>
                    <h4>-</h4>
                    @if($Karyawan->status_pkwt == 1)
                        <h5><label class="label bg-success">: Pegawai Tetap</label></h5>
                        @else
                        <h5><label class="label bg-primary">: Pegawai Tidak Tetap</label></h5>
                    @endif
                    <h5> : {{$Karyawan->jabatan->jabatan}}</h5>
                    <h5> : {{$Karyawan->tanggal_masuk}}</h5>
                    </td>
                </tr>
            </table>
        </div>

    </div>

         </body>
</html>
