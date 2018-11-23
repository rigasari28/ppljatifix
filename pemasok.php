<?php 
require 'function.php';
$id = $_SESSION['id'];
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
background-image: url(./gambar/forest.jpg);
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
        <li role="presentation"><a href="pemasok.php" style=" text-decoration:none; color: rgb(46, 38, 38);font-family: segoe ui; font-size: 20px"><strong>
                    <i>Home </i> </strong> </a></li>
        <li role="presentation"><a href="profilpemasok.php" style="color: white;">Profil</a></li>
        <li role="presentation"><a href="pemasokkayu.php" style="color: white;">Kayu</a></li>
        <li role="presentation"><a href="pemasokinformasi.php" style="color: white;">Informasi</a></li>
        <li role="presentation"><a href="#" style="color: white; "> <span class="glyphicon glyphicon-comment"></span>
            </a></li>

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
            <h1 style="color: rgb(255, 255, 255); text-shadow:  3px 3px 6px #9e9b95; text-align: center"> <strong> <i>
                        Jadikan Hunian <br>
                        Anda Lebih Nyaman <br> </i> </strong></h1>
        </div>
    </div>

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
                        <h1 style="font-family :'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Dapatkan
                            Informasi tentang pemasaran dari Kami</h1>
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
    <div class="judul">
        <h1 style="text-align:center; text-shadow:  3px 3px 6px #b49748; color: white"> <strong><i> Kami Bekerja Sama Dengan </i></strong></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
                        <img style="max-height: 200px;" src="./gambar/logo/1.png">
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
                        <img style="max-height: 200px;" src="./gambar/logo/2.png">
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
                        <img style="max-height: 200px;" src="./gambar/logo/3.png">
                    </div>
                </div>
            </div>
            
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
                        <img style="max-height: 200px;" src="./gambar/logo/5.png">
                    </div>
                </div>
            </div>
           
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