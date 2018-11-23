<?php


require 'function.php';

$id = $_SESSION['id'];

$produk = query(" SELECT * FROM produk ");


 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Furniture</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">


    <style>
        body {
    background-image: linear-gradient(to top, #e6b980 0%, #eacda3 100%);
    background-size: cover

}

#form {
    border-radius: 20px;
}

p   {
    color: white;
    font-family: calibri;
    font-style: italic

}

.jumbotron {
background-image: url(./gambar/f.jpg);
background-size: cover;
height: 500px

}

.thumbnail {
    border-radius: 20px;
    box-shadow: 9px 9px 6px #615126; 
}


</style>

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <ul class="nav nav-tabs" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">
        <li role="presentation"><a href="cus.php" style="color: white;">Home</a></li>
        <li role="presentation"><a href="cus_profil.php" style="color:white">Profil  </a></li>
        <li role="presentation"><a href="#" style=" text-decoration:none; color: rgb(46, 38, 38);font-family: segoe ui; font-size: 20px"> <strong> <i> Furniture </i> </strong> </a>
        </li>
        <li role="presentation"><a href="#" style="color: white;">Pemesanan</a></li>

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
        <h1> <strong> <i> Lihat Lebih Banyak Lagi Katalog Terbaru Untuk Anda </i> </strong> </h1>

            <h2 style=" color: blue; font-family: calibri">Bisa request model yang diinginkan, klik disini</h2> <br><br>
            <p><a class="btn btn-primary btn-lg" href="request.php" role="button">Request Furniture</a></p>

        </div>
    </div>
    </div>

    <div class="container">
    <div class="row" >
          	<?php  $i = 1; ?>
			<?php  foreach ($produk as $row ):?>
            <div class="col-sm-6 col-md-4" >
                    <div class="thumbnail" >
                      <img img src="gambarproduk/<?= $row["gambarproduk"];  ?>" alt="...">
                      <div class="caption">
                        <h3 style="text-align:center"> <strong> <i> <?= $row["namaproduk"]; ?> </i> </strong></h3>
                       	<h4 style="text-align:center"> <strong> <i> Rp. <?= $row["hargaproduk"]; ?> </i> </strong></h4>
                       	<h4 style="text-align:center"> <strong> <i> Stok = <?= $row["stok"]; ?> </i> </strong></h4>
                        <p style="text-align:center"><a href="cus_furniture2.html" class="btn btn-primary" role="button" >Pesan</a> </p>
                      </div>
                    </div>
                  </div>
            <?php $i++;  ?>
			<?php endforeach; ?>

        </div>
        <div class="row" style="background-color: #393e46">
                <div class="container">
                    
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
                width="100%" height="250" frameborder="10" style="border:0" allowfullscreen ></iframe> <br><br>
                <hr>
            </div>
            </div>
    
        
    </body>