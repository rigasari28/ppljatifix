<?php

require 'function.php';
$id = $_SESSION['id'];
$informasi = query(" SELECT * FROM informasi");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Informasi</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">
    <style>
        .jumbotron {
            background-image: url(./gambar/informasi.jpg);
            box-shadow: 9px 9px 6px #be9b6c; 
            height: 450px;
            background-size: cover;

        }
        #textbox {
            border-radius: 10px;
            width : 400%; 
            height: 200px;
           
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
    <ul class="nav nav-tabs"style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">

        <li role="presentation"><a href="pemasok.php"style="color: white;">Home</a></li>
        <li role="presentation"><a href="profilpemasok.php"style="color: white;">Profil</a></li>
        <li role="presentation"><a href="pemasokkayu.php"style="color: white;">Kayu</a></li>

       
        <li role="presentation" ><a href="#" style=" text-decoration:none; color: rgb(46, 38, 38);font-family: segoe ui; font-size: 20px"> <strong> <i> Informasi </i> </strong> </a></li>
    <li role="presentation"><a href="#" style="color: white;"> <span class="glyphicon glyphicon-comment"></span>
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
    <hr>

        <div class="jumbotron">
            <div class="container">
            <h1 style=" color: BLACK; text-align: center; font-family: calibri;text-shadow:  3px 3px 6px #4b4740">
             <strong> <i> Kelola Informasi</i> </strong> </h1> <br><br>
        </div>

    </div>

       

           


 <div class="container">
        <div class="row">
        </div>
    <hr>
     <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover">

        <tr>
                        
                        <th style="text-align:center">Informasi</th style="text-align:center">
                        
        </tr>

        <?php  foreach ($informasi as $row ):?>
        <tr> 

            
            <td> <?= $row["info"]; ?> </td>
            
            
            
            
        </tr>
     
        <?php endforeach; ?>
        
        
        
    </table>
    </div>
</div>
    <hr>
        <p style="text-align : center;">
            PPL Agroindustri
    
        </p>



</body>

</html>