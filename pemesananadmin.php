<?php

require 'function.php';

//ambil data url
$id = $_SESSION['id'];


$request = query(" SELECT * FROM request where status = 'selesai' ");
$pesankayu = query(" SELECT * FROM transaksi_kayu  ");
$furniture = query(" SELECT * FROM transaksi  ");


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
        <li role="presentation"><a href="verifadmin.php" style="color: white;">Verifikasi</a></li>
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
        <li role="presentation" class="active"><a href="#" style="background-color:#393e46; text-decoration:none; color: white">Pemesanan</a></li>
        

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
            <h2 style="text-align:center; color: white">Riwayat Penjualan Produk Request</h2>

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
          
            
            
        </tr>
        <?php $i++;  ?>
        <?php endforeach; ?>
        
        
        
    </table>
    </div>
 
<div class="container">
        <div class="jumbotron">
            <h2 style="text-align:center; color: white">Riwayat Pemesanan Kayu</h2>

        </div>
    </div>
    <hr>
     <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover">

        <tr>
                        <th style="text-align:center">No</th style="text-align:center">
                        <th style="text-align:center">ID </th style="text-align:center">
                        <th style="text-align:center">Jumlah Pembelian</th style="text-align:center">
                        <th style="text-align:center">Status</th style="text-align:center">
        </tr>

        <?php  $i = 1; ?>
        <?php  foreach ($pesankayu as $row ):?>
        <tr> 

            <td> <?= $i; ?></td>
            <td> <?= $row["idkayu"]; ?> </td>
            <td> <?= $row["jumlah"]; ?> </td>
            <td> <?= $row["statuskayu"]; ?> </td>
           
          
            
            
        </tr>
        <?php $i++;  ?>
        <?php endforeach; ?>
        
        
        
    </table>
    </div>

    <div class="container">
        <div class="jumbotron">
            <h2 style="text-align:center; color: white">Riwayat Pemesanan Furniture</h2>

        </div>
    </div>
    <hr>
     <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover">

        <tr>
                        <th style="text-align:center">No</th style="text-align:center">
                        <th style="text-align:center">ID</th style="text-align:center">
                        <th style="text-align:center">ID produk</th style="text-align:center">
                        <th style="text-align:center">Jumlah Pembelian</th style="text-align:center">
                        <th style="text-align:center">Pembayaran</th style="text-align:center">
                        <th style="text-align:center">Status</th style="text-align:center">
        </tr>

        <?php  $i = 1; ?>
        <?php  foreach ($furniture as $row ):?>
        <tr> 

          <td> <?= $i; ?></td>
            <td> <?= $row["id"]; ?> </td>
            <td> <?= $row["idproduk"]; ?> </td>
            <td> <?= $row["jumlahpembelian"]; ?> </td>
            <td> <img src="gambarpembayaranfur/<?= $row["pembayaranfurniture"];  ?>" width="100" > </td>
            <td> <?= $row["statustransaksi"]; ?> </td>
           
          
            
            
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