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


    <title>Kelola Produk</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">
    <style>
        .jumbotron {
            background-image: url(compute.jpg)
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

        <li role="presentation" ><a href="admin.php" style="color: white;">Beranda</a ></li>
        <li role="presentation"><a href="#"style="color: white;">Verifikasi</a></li>
        <li role="presentation"><a href="profil.php"style="color: white;">Profil</a></li>

        <li role="presentation" class="active"><a href="#" style="background-color:#393e46; text-decoration:none; color: white">Produk</a></li>
        <li role="presentation"><a href="informasi.php"style="color: white;">Informasi</a></li>
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
            <h1 style=" color: white; font-family: calibri">Produk Meubel</h1> <br><br>
            <p><a class="btn btn-primary btn-lg" href="tambahproduk.php" role="button">Tambah Furniture</a></p>

        </div>
    </div>



	
    <div class="container">
        <div class="row">
        	<?php  $i = 1; ?>
			<?php  foreach ($produk as $row ):?>
            <div class="col-sm-6 col-sm-4">
                <div class="thumbnail">
                    <img style="width: : 300px;" img src="gambarproduk/<?= $row["gambarproduk"];  ?>" alt="...">
                    <div class="caption">
                        <h3> <?= $row["namaproduk"]; ?></h3>
                        <h4><?= $row["hargaproduk"]; ?></h4>
                        <h4><?= $row["stok"]; ?> </h4>
                        <p><a href="ubahproduk.php?idproduk=<?= $row["idproduk"]; ?>" class="btn btn-primary" role="button">Ubah</a> 
                        </p>
                    </div>
                </div>
            </div>
             <?php $i++;  ?>
			<?php endforeach; ?>
        </div>
    </div>
   
    


    <hr>
    <p style="text-align : center;">
        PPL Agroindustri

    </p>


    </div>
</body>

</html>