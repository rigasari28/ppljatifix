
<?php 


require 'function.php';
//ambil data url
$id = $_SESSION['id'];


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Admin</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">

<style>
body {
    background-image: linear-gradient(to top, #e6b980 0%, #eacda3 100%);

}

p   {
    color: white;
    font-family: calibri;
    font-style: italic

}


</style>

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <ul class="nav nav-tabs" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">
        <li role="presentation" class="active"><a href="#" style="background-color:#393e46; text-decoration:none; color: white">Home</a></li>
        <li role="presentation"><a href="" style="color: white;">Verifikasi</a></li>
        <li role="presentation"><a href="profil.php" style="color: white;">Profil</a></li>
        <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false" style="color:white">Produk</a>
                    <ul class="dropdown-menu">
                        <li><a href="produk.php">Furniture</a></li>
                        <li><a href="kayu.php">Kayu</a></li>

                    </ul>
                </li>
        <li role="presentation"><a href="informasi.php" style="color: white;">Informasi</a></li>

         <div id="navbar" class="navbar-collapse collapse" >

            <form class="navbar-form navbar-right">

                <button type="submit" class="btn btn-warning" >
                    <a href="logout.php" style="color : white" onclick="return confirm('Yakin untuk keluar?');">
                    <span class="glyphicon glyphicon-off" aria-hidden="true" >
                       Keluar </span></a></button>
            </form>
        </div>
    </ul>

   
    <div class="container">
        <hr>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item">
                    <img src="./foto.jpg">
                    <div class="carousel-caption">
                        <h1 style="font-family :'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Selamat
                            datang di Meubel Jati Indah</h1>

                    </div>
                </div>
                <div class="item active">

                    <img src="./compute.jpg" alt="...">
                    <div class="carousel-caption">
                        <h1 style="font-family :'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Kelola
                            data barang anda lebih baik lagi disini</h1>
                    </div>
                </div>


            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
   <br>
    <div class="row" style="background-color: #393e46">
            <div class="container">
                <hr>
                <div class="col-md-4">
                    <h2 style="color:white"> <i> About Us </i></h2 style="color:white">
                    <p>  Kami adalah travel yang menyediakan paket wisata diseluruh pulau Jawa dengan fasilitas yang
                        berkualitas dan harga yang terjangkau</p>  
    
                </div>
                <div class="col-md-4">
                    <h2 style="color:white"> <i> Contact </i></h2 style="color:white">
                    <p>  <strong>Office:</strong></p>  
                    <p>  Jl Kaliserang Blok D 22 Lingkungan Krajan</p>  
                    <p>  <strong>Contact:</strong></p>  
                    <p>  +62 81 235 898 031</p>  
                    <p>   <strong> Email: </strong></p>  
                    <p>  meubeljatiindah@gmail.com</p>  
    
    
                </div>
            </div>
        </div>
</body>

</html>