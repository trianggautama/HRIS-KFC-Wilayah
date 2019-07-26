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
            <hr>
    </div>

    <div class="container">
        <div class="isi">

            <h2 style="text-align:center; margin:5px;">PROFIL OUTLET </h2>
            <br>
            <table style="margin-bottom:20px;">
                <tr>
                    <td style="width:260px;  text-align: center;">
                        <img style="width:100%; height:auto margin:auto;" src="images/outlet/{{$outlet->foto}}">
                    </td>
                    <td style="padding-left:20px !mportant; ">
                        <h5>Nama Outlet</h5>
                        <h5>Nomor Telepon </h5>
                        <h5>Alamat </h5>
                        <h5>Jumlah karyawan  </h5>
                    </td>
                    <td>
                    <h5> : {{$outlet->user->name}}</h5>
                    <h5> {{$outlet->telepon}}</h5>
                    <h5> {{$outlet->alamat}}</h5>
                    <h5> {{$karyawan->count()}} Orang</h5>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <div class="ttd">
                <h5>
                    <p>Banjarbaru, {{$tgl}}</p>
                </h5>
                <h5>Restaurant Outlet Manager</h5>
                <br>
                <br>
                <h5 style="text-decoration:underline;">Muhammad zaini </h5>
                <h5>NIK. 122113412</h5>
            </div>
        </div>

    </div>

         </body>
</html>
