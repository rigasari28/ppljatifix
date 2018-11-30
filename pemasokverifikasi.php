<?php

require 'function.php';

//ambil data url
$id = $_SESSION['id'];


$request = query(" SELECT * FROM transaksi_kayu");;


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
        
        <li role="presentation"><a href="pemasok.php" style="color: white;">Beranda</a></li>
        <li role="presentation"><a href="profilpemasok.php" style="color: white;">Profil</a></li>
        <li role="presentation"><a href="pemasokkayu.php" style="color: white;">Kayu</a></li>
        <li role="presentation"><a href="pemasokinformasi.php" style="color: white;">Informasi</a></li>
         <li role="presentation"><a href="pemasokverifikasi.php" style=" text-decoration:none; color: rgb(46, 38, 38);font-family: segoe ui; font-size: 20px"><strong>
                    <i>Verifikasi </i> </strong> </a></li>
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
            <h2 style="text-align:center; color: white">Verifikasi Pemesanan Kayu</h2>

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
                        <th style="text-align:center">Aksi</th style="text-align:center">
        </tr>

        <?php  $i = 1; ?>
        <?php  foreach ($request as $row ):?>
        <tr> 

            <td> <?= $i; ?></td>
            <td> <?= $row["idkayu"]; ?> </td>
            <td> <?= $row["jumlah"]; ?> </td>
            <td> <?= $row["statuskayu"]; ?> </td>
            <td> 
            <p style="text-align:center">
                <a href = "verifkirim.php?id_tk=<?= $row["id_tk"]; ?>" onclick="return confirm ('yakin untuk diverifikasi?');" class="btn btn-primary" role="button"> Kirim </a>
                <a href = "verifbayar.php?id_tk=<?= $row["id_tk"]; ?>" onclick="return confirm ('yakin untuk diverifikasi?');" class="btn btn-warning" role="button"> Bayar </a>
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