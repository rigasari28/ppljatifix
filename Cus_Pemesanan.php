<?php 

require 'function.php';

//ambil data url
$id = $_SESSION['id'];

$r_pembayaran = query(" SELECT * FROM request where id = '$id'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Pelanggan</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">

    <style>
        body {
    background-image: linear-gradient(to top, #e6b980 0%, #eacda3 100%);
    background-size: cover

}

p   {
    color: white;
    font-family: calibri;
    font-style: italic

}

.jumbotron {
background-image: url(./gambar/f.jpg);
background-size: cover;
height: 300px

}

.thumbnail {
    border-radius: 20px;
    box-shadow: 9px 9px 6px #615126; 
    
}


.file-field.big-2 .file-path-wrapper {
  height: 3.7rem; }
  .file-field.big-2 .file-path-wrapper .file-path {
    height: 3.5rem; }


</style>

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <ul class="nav nav-tabs" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">
        <li role="presentation"><a href="cus.php ?>" style=" text-decoration:none; color:white ">Beranda</a></li>
        <li role="presentation"><a href="cus_profil.php" style="color: white;">Profil</a></li>
        <li role="presentation"><a href="cusfurniture.php" style="color: white;">Furniture</a></li>
        <li role="presentation"><a href="#" style="color: rgb(46, 38, 38);font-family: segoe ui; font-size: 20px">
                <strong> <i>Pemesanan</i> </strong> </a></li>

        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">

                <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-off" aria-hidden="true">
                        Keluar</span></button>
            </form>
        </div>
    </ul>

    
     

     <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="jumbotron">
            <h2 style="text-align:center; color: white">Verifikasi Pembayaran Produk Request</h2>

        </div>
    </div>
    <hr>
     <div class="row">
        </div>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover">

        <tr>
                        <th style="text-align:center">No</th style="text-align:center">
                        <th style="text-align:center">Nama Produk</th style="text-align:center">
                        <th style="text-align:center">Gambar Furniture</th style="text-align:center">
                        <th style="text-align:center">Budget</th style="text-align:center">
                        <th style="text-align:center">Lama Pengerjaan</th style="text-align:center">
                        <th style="text-align:center">Bukti Pembayaran</th style="text-align:center">
                        <th style="text-align:center">Status</th style="text-align:center">
                        <th style="text-align:center">Upload Pembayaran</th style="text-align:center">
        </tr>

        <?php  $i = 1; ?>
        <?php  foreach ($r_pembayaran as $row ):?>
        <tr> 

            <td> <?= $i; ?></td>
            <td> <?= $row["namarequest"]; ?> </td>
            <td> <img src="gambarrequest/<?= $row["referensi"];  ?>" width="100" > </td>
            <td> <?= $row["budget"]; ?> </td>
            <td> <?= $row["waktu"]; ?> </td>
            <td> <img src="gambarpembayaranrequest/<?= $row["pembayaran"];  ?>" width="100" > </td>
            <td> <?= $row["status"]; ?> </td>
            <td> 
            <p style="text-align:center">
                 <a href = "pem_res.php?id_request=<?= $row["id_request"]; ?>"   class="btn btn-primary" role="button"> Upload </a>
            </p>
            </td>
            
            
        </tr>
        <?php $i++;  ?>
        <?php endforeach; ?>
        
        
        
    </table>
    </div>
    <form action="" method="post" enctype="multipart/form-data">

    <div class="row" style="background-color: #393e46">
        <div class="container">
            <hr>
            <div class="col-md-4">
                <h2 style="color:white"> <i> About Us </i></h2 style="color:white">
                <hr>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda debitis ipsa distinctio
                    temporibus esse tenetur dolore, minus quaerat soluta non nam iusto reiciendis pariatur
                    perspiciatis, sit ut expedita! Dolorum, quia.</p>

            </div>
            <div class="col-md-4">
                <h2 style="color:white"> <i> Contact </i></h2 style="color:white">
                <hr>
                <p> <strong>Office:</strong></p>
                <p>Jl. Hayam Wuruk 37, Kaliwates Kidul, Kaliwates, Kabupaten Jember, Jawa Timur 68131</p>
                <p> <strong>Contact:</strong></p>
                <p> (0331) 484856</p>
                <p> <strong> Email: </strong></p>
                <p> meubeljatiindah@gmail.com</p>

            </div>
        </div>
        <div class="container">
            <h2 style="color:white"> <strong> <i> Lokasi Kami </i> </strong> </h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7898.46361799343!2d113.67166732179106!3d-8.17938735672322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6940011c77b83%3A0x9214e371162b1e62!2sMeubel+Jati+Indah!5e0!3m2!1sid!2sid!4v1540172189438"
                width="100%" height="250" frameborder="10" style="border:0" allowfullscreen></iframe> <br><br>
            <hr>
        </div>
    </div>



</body>