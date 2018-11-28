<?php


require 'function.php';

$id = $_SESSION['id'];

$kayu = query(" SELECT * FROM kayu where id=$id ");


 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Pemasok</title>
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
background-image: url(./gambar/kayu.jpg);
background-size: cover;
height: 450px

}

.thumbnail {
    border-radius: 20px;
   background-color: white;
    box-shadow: 9px 9px 6px #c4a95f; 
}


</style>

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <ul class="nav nav-tabs" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">
        <li role="presentation"><a href="pemasok.php" style="color: white;">Beranda</a></li>
        <li role="presentation"><a href="profilpemasok.php" style="color: white;">Profil</a></li>
        <li role="presentation"><a href="pemasokkayu.php" style=" text-decoration:none; color: rgb(46, 38, 38);font-family: segoe ui; font-size: 20px"><strong>
                    <i>Kayu </i> </strong> </a></li>
        <li role="presentation"><a href="pemasokinformasi.php" style="color: white;">Informasi</a></li>
        <li role="presentation"><a href="pemasokverif.php" style="color: white;">Verifikasi</a></li>
        <!-- iniadalahiconnotif -->
        <!-- <li role="presentation"><a href="#" style="color: white; "> <span class="glyphicon glyphicon-comment"></span> -->
        <div id="navbar" class="navbar-collapse collapse" >

            <form class="navbar-form navbar-right">

                <button type="submit" class="btn btn-warning" >
                    <a href="logout.php" style="color : white" onclick="return confirm('Yakin untuk keluar?');">
                    <span class="glyphicon glyphicon-off" aria-hidden="true" >
                       Keluar </span></a></button>
            </form>
        </div>
    </ul>
    <div class="jumbotron">
        <div class="container">
            <h1 style="color: rgb(36, 36, 51); text-shadow:  3px 3px 6px #4b4740; text-align: center"> <strong> <i>
                        Ketahui Jenis Kayu <br>
                        Terbaik Untuk Kebutuhan Anda <br> </i> </strong></h1>
                      <p style="text-align: center">  <button class="btn-lg btn-default" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%); color: white; "> 
                        <a href="tambahkayu.php" style="color:white"> <strong> Tambah Data Kayu </strong> </a> </button> </p>
        </div>
    </div>
     <div class="container">
        <div class="row">
            <?php  foreach ($kayu as $row ):?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="gambarkayu/<?= $row["gambarkayu"];  ?>" width="300" height="200">
                    <div class="caption">
                        <h3><?= $row["identitas"]; ?></h3>
                        <p style="color:black">Diameter Kayu : <?= $row["diameter"]; ?> meter</p>
                        <p style="color:black">Panjang Kayu : <?= $row["panjang"]; ?> meter</p>
                        <p style="color:black">Harga Kayu : Rp.<?= $row["hargakayu"]; ?></p>
                        <p style="color:black">Stok Kayu : <?= $row["stokkayu"]; ?></p>
                        <p><a href="ubahkayu.php?idkayu=<?= $row["idkayu"]; ?>" class="btn btn-primary" role="button">Ubah</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

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

</html>