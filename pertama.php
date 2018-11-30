<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="desain.css">

    <style>
        body {

    background-image: linear-gradient(to top, #e6b980 0%, #eacda3 100%);
}
h2 {
font-family: 'Segoe UI'
}

p {
    font-family: calibri;
    color: white
}
.jumbotron {
    height: 500px;
}

</style>

</head>

<body>
    <?php 
     ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>




    <nav class="navbar navbar-default">
   
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color : white"><span class="glyphicon glyphicon-lamp"
                        aria-hidden="true" style="color:white"></span>Meubel Jati Indah</a>
            </div>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" style="width: 100%;">
                </div>

                <button type="submit" class="btn btn-primary" style="background-color: #393e46"><span class="glyphicon glyphicon-search"
                        aria-hidden="true" style="color:white"></button>
            </form>
             <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false" style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"
                            style="color:white"> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="login.php">Masuk</a></li>
                        <li><a href="daftarpk.php">Daftar Sebagai Pemasok</a></li>
                        <li><a href="daftarpm.php">Daftar Sebagai Customer</a></li>

                    </ul>
                </li>
               
            </ul>
        </div>
    </nav>
  


    <br><br><br>
    <div class="jumbotron">
        <div class="container">
            <h1 style="font-family: Segoe UI"> <strong> <I> Selamat Datang! </I> </strong></h1>
            <h3 style="font-family: Segoe UI"> <strong> <I> di Meubel Jati Indah </I> </strong></h3>

        </div>
        <br>

    </div>
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="./gambar/foto1.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="./gambar/foto2.jpg" alt="...">
                    <div class="carousel-caption">

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
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="./gambar/kursi.jpg" alt="...">

                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="./gambar/kursi2.jpg" alt="...">

                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="./gambar/meja1.jpg" alt="...">

                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="./gambar/meja2.jpg" alt="...">

                </a>
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

</html>