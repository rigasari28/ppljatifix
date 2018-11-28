<?php

require 'function.php';

//ambil data url
$id = $_SESSION['id'];


$request = query(" SELECT * FROM request where status = 'menunggu konfirmasi' ");
$r_pembayaran = query(" SELECT * FROM request where status = 'request diterima, menunggu pembayaran' or status='menunggu konfirmasi pembayaran dari meubel' or status ='verifikasi pembayaran ditolak, mohon upload bukti pembayaran dengan jelas dan benar'");
$ve_r_pembayaran = query(" SELECT * FROM request where status = 'proses pembayaran berhasil, menunggu proses pengiriman' or status ='proses pengiriman berlangsung'");


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Verivikasi Profil User</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">
    <style>
        .jumbotron {
            background-image: url(foto.jpg)
        }
        body {
    background-image: linear-gradient(to top, #e6b980 0%, #eacda3 100%);

}

p {
    color: white
}
    </style>

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <ul class="nav nav-tabs" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">
       <li role="presentation"><a href="admin.php" style="color: white;">Beranda</a></li>
        <li role="presentation" class="active"><a href="#" style="background-color:#393e46; text-decoration:none; color: white">Verifikasi</a></li>
         <li role="presentation"><a href="profil.php" style="color: white;">Profil</a></li>
        <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false"style="color: white;" >Produk</a>
                    <ul class="dropdown-menu">
                        <li><a href="produk.php">Furniture</a></li>
                        <li><a href="kayu.php">Kayu</a></li>

                    </ul>
                </li>
        <li role="presentation"><a href="informasi.php" style="color: white;">Informasi</a></li>
        <li role="presentation"><a href="informasi.php" style="color: white;">Pemesanan</a></li>

         <div id="navbar" class="navbar-collapse collapse" >

            <form class="navbar-form navbar-right">

                <button type="submit" class="btn btn-warning" >
                    <a href="logout.php" style="color : white" onclick="return confirm('Yakin untuk keluar?');">
                    <span class="glyphicon glyphicon-off" aria-hidden="true" >
                         Keluar</span></a></button>
            </form>
        </div>
    </ul>
    <hr>
   <div class="container">
        <div class="row">
        </div>
    <div class="container">
        <div class="jumbotron">
            <h2 style="text-align:center; color: white">Verifikasi Awal Produk Request</h2>

        </div>
    </div>
    <hr>
    <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover">

        <tr>
                        <th style="text-align:center">No</th style="text-align:center">
                        <th style="text-align:center">ID </th style="text-align:center">
                        <th style="text-align:center">Nama Produk</th style="text-align:center">
                        <th style="text-align:center">Gambar Furniture</th style="text-align:center">
                        <th style="text-align:center">Budget</th style="text-align:center">
                        <th style="text-align:center">Lama Pengerjaan</th style="text-align:center">
                        <th style="text-align:center">Status</th style="text-align:center">
                        <th style="text-align:center">Aksi</th style="text-align:center">
        </tr>

        <?php  $i = 1; ?>
        <?php  foreach ($request as $row ):?>
        <tr> 

            <td> <?= $i; ?></td>
            <td> <?= $row["id"]; ?> </td>
            <td> <?= $row["namarequest"]; ?> </td>
            <td> <img src="gambarrequest/<?= $row["referensi"];  ?>" width="100" > </td>
            <td> <?= $row["budget"]; ?> </td>
            <td> <?= $row["waktu"]; ?> </td>
            <td> <?= $row["status"]; ?> </td>
            <td> 
            <p style="text-align:center">
                <a href = "verifrequest.php?id_request=<?= $row["id_request"]; ?>" onclick="return confirm ('yakin untuk diverifikasi?');" class="btn btn-primary" role="button"> Terima </a>
                <a href = "tolakrequest.php?id_request=<?= $row["id_request"]; ?>" onclick="return confirm ('yakin untuk ditolak?');" class="btn btn-warning" role="button"> Tolak </a>
            </p>
            </td>
            
            
        </tr>
        <?php $i++;  ?>
        <?php endforeach; ?>
        
        
        
    </table>
    </div>

     <div class="container">
        <div class="jumbotron">
            <h2 style="text-align:center; color: white">Verifikasi Pembayaran Produk Request</h2>

        </div>
    </div>
    <hr>
    <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover">

        <tr>
                        <th style="text-align:center">No</th style="text-align:center">
                        <th style="text-align:center">ID </th style="text-align:center">
                        <th style="text-align:center">Nama Produk</th style="text-align:center">
                        <th style="text-align:center">Gambar Furniture</th style="text-align:center">
                        <th style="text-align:center">Budget</th style="text-align:center">
                        <th style="text-align:center">Lama Pengerjaan</th style="text-align:center">
                        <th style="text-align:center">Bukti Pembayaran</th style="text-align:center">
                        <th style="text-align:center">Status</th style="text-align:center">
                        <th style="text-align:center">Aksi</th style="text-align:center">
        </tr>

        <?php  $i = 1; ?>
        <?php  foreach ($r_pembayaran as $row ):?>
        <tr> 

            <td> <?= $i; ?></td>
            <td> <?= $row["id"]; ?> </td>
            <td> <?= $row["namarequest"]; ?> </td>
            <td> <img src="gambarrequest/<?= $row["referensi"];  ?>" width="100" > </td>
            <td> <?= $row["budget"]; ?> </td>
            <td> <?= $row["waktu"]; ?> </td>
            <td> <img src="gambarpembayaranrequest/<?= $row["pembayaran"];  ?>" width="100" > </td>
            <td> <?= $row["status"]; ?> </td>
            <td> 
            <p style="text-align:center">
                <a href = "verifrequestpem.php?id_request=<?= $row["id_request"]; ?>" onclick="return confirm ('yakin untuk diverifikasi?');" class="btn btn-primary"" role="button"> Terima </a>
                <a href = "tolakrequestpem.php?id_request=<?= $row["id_request"]; ?>" onclick="return confirm ('yakin untuk ditolak?');" class="btn btn-warning" role="button"> Tolak </a>
            </p>
            </td>
            
            
        </tr>
        <?php $i++;  ?>
        <?php endforeach; ?>
        
        
        
    </table>
    </div>


<div class="container">
        <div class="jumbotron">
            <h2 style="text-align:center; color: white">Verifikasi Pengiriman dan Penerimaan Produk Request</h2>

        </div>
    </div>
    <hr>
    <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover">

        <tr>
                        <th style="text-align:center">No</th style="text-align:center">
                        <th style="text-align:center">ID </th style="text-align:center">
                        <th style="text-align:center">Nama Produk</th style="text-align:center">
                        <th style="text-align:center">Gambar Furniture</th style="text-align:center">
                        <th style="text-align:center">Budget</th style="text-align:center">
                        <th style="text-align:center">Lama Pengerjaan</th style="text-align:center">
                        <th style="text-align:center">Bukti Pembayaran</th style="text-align:center">
                        <th style="text-align:center">Status</th style="text-align:center">
                        <th style="text-align:center">Aksi</th style="text-align:center">
        </tr>

        <?php  $i = 1; ?>
        <?php  foreach ($ve_r_pembayaran as $row ):?>
        <tr> 

            <td> <?= $i; ?></td>
            <td> <?= $row["id"]; ?> </td>
            <td> <?= $row["namarequest"]; ?> </td>
            <td> <img src="gambarrequest/<?= $row["referensi"];  ?>" width="100" > </td>
            <td> <?= $row["budget"]; ?> </td>
            <td> <?= $row["waktu"]; ?> </td>
            <td> <img src="gambarpembayaranrequest/<?= $row["pembayaran"];  ?>" width="100" > </td>
            <td> <?= $row["status"]; ?> </td>
            <td> 
            <p style="text-align:center">
                <a href = "verifrequestkirim.php?id_request=<?= $row["id_request"]; ?>" onclick="return confirm ('yakin untuk diverifikasi?');" class="btn btn-primary"" role="button"> Kirim </a>
                <br>
                <br>
                <a href = "requestselesai.php?id_request=<?= $row["id_request"]; ?>" onclick="return confirm ('yakin untuk menyelesaikan proses pemesanan?');" class="btn btn-warning" role="button"> Selesai </a>
            </p>
            </td>
            
            
        </tr>
        <?php $i++;  ?>
        <?php endforeach; ?>
        
        
        
    </table>
    </div>
</div>
        <hr>
        <p style="text-align : center;">
            PPL Agroindustri

        </p>


    </div>

</body>
</html>