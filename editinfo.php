<?php 
require 'function.php';
$id = $_SESSION['id'];
//ambil data url
$id_info = $_GET["id_info"];
//query data  berdasarkan id
$einfo = query("SELECT * FROM informasi WHERE id_info = $id_info")[0];


if (isset($_POST["editinfo"])){
	
	
    if (ubahinfo ( $_POST) > 0){
    	echo "
    	<script>
    	alert('data behasil diubah');
    	document.location.href = 'informasi.php'
    	</script>
    	";

    } else {
    	echo "
    	<script>
    	alert('data gagal diubah');
    	document.location.href = 'informasi.php'
    	</script>
    	";
    }
}
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
            background-image: url(foto.jpg)
        }
        #textbox {
            border-radius: 10px;
            width : 400%; 
            height: 200px;
           
        }
    </style>

</head>

<body>
    <form  action="" method="post" enctype="multipart/form-data"></form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <ul class="nav nav-tabs"style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">

        <li role="presentation"><a href="admin.php"style="color: white;">Beranda</a></li>
        <li role="presentation"><a href="#"style="color: white;">Verifikasi</a></li>
        <li role="presentation"><a href="profil.php"style="color: white;">Profil</a></li>
        <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false"style="color: white;" >Produk</a>
                    <ul class="dropdown-menu">
                        <li><a href="produk.php">Furniture</a></li>
                        <li><a href="kayu.php">Kayu</a></li>

                    </ul>
                </li>
        <li role="presentation" class="active"><a href="#" style="background-color:#393e46; text-decoration:none; color: white">Informasi</a></li>
        <li role="presentation"><a href="pemesananmeb.php"style="color: white;">Pemesanan</a></li>

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
        <div class="jumbotron">
            <h1 style=" color: white; font-family: calibri">Ubah Informasi</h1> <br><br>
        </div>

       
         
            <div class="row">
                <div class="col-md-12 ">
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group has-success">
                            <div class="col-lg-10">
                                 <input type="hidden" name="id_info" value="<?= $einfo["id_info"]; ?>">
                                <input type="text" name="info" id="info" value="<?= $einfo["info"]; ?>" required>
                                </input>
                            </div>
                           
                        </div>
                        <div class="col-sm-offset-0 col-sm-10">
                            <button href type="submit" class="btn btn-primary" name="editinfo" style="widows: 900px;">Simpan</button>
                          
                           <button class="btn btn-warning" type="button">
                                        <a href="informasi.php" style="color : white">
                                        <span  aria-hidden="true" >
                                        Batal</span></a>
                            </button>
                        </div>
                </div>
            </div>
 </body>

</html>