<?php 
require 'function.php';
//ambil data url
$id = $_SESSION['id'];
$idproduk = $_GET["idproduk"];
//query data produk berdasarkan id
$produk = query("SELECT * FROM produk WHERE idproduk = $idproduk")[0];


if (isset($_POST["editproduk"])){
	
	
    if (ubah ( $_POST) > 0){
    	echo "
    	<script>
    	alert('data behasil diubah');
    	document.location.href = 'produk.php'
    	</script>
    	";

    } else {
    	echo "
    	<script>
    	alert('data gagal diubah');
    	document.location.href = 'produk.php'
    	</script>
    	";
    }
}


 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data Produk</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">

    <style>
     body {
    background-image: linear-gradient(to top, #e6b980 0%, #eacda3 100%);

}
    </style>
</head>

<body>
    
   <ul class="nav nav-tabs" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">
       <li role="presentation"><a href="admin.php" style="color: white;">Home</a></li>
        <li role="presentation"><a href="" style="color: white;">Verifikasi</a></li>
        <li role="presentation" ><a href="profil.php" style="color: white;">Profil</a></li>
        <li class="dropdown"  class="active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false" style="background-color:#393e46; text-decoration:none; color: white" >Produk</a>
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
                        Keluar</span></a></button>
            </form>
        </div>
    </ul>
    <hr>
    <div class="container">
        <div class="jumbotron">
            <h1>Edit Data Produk</h1>
           
            <p></p>
        </div>
    </div>
    <div class="row register-form">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal custom-form" id="form" style="background:rgba(0,9,0,0.3)" action="" method="post" enctype="multipart/form-data">
                    <h1 style="color:white"> Edit Produk Furniture</h1>
                    <input type="hidden" name="idproduk" value="<?= $produk["idproduk"]; ?>">
                    <input type="hidden" name="gambarLama" value="<?= $produk["gambarproduk"]; ?>">
                    <div class="form-group" >
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="namaproduk" style="color:white">Nama Produk</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="namaproduk" id="namaproduk" value="<?= $produk["namaproduk"]; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="hargaproduk" style="color:white">Harga Produk </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="number"  name="hargaproduk" id="hargaproduk" value="<?= $produk["hargaproduk"]; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="stok" style="color:white">Stok </label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <input class="form-control" type="number" name="stok" id="stok" value="<?= $produk["stok"]; ?>">
                            </div>
                        </div>

                    <div class="form-group">
                     <label class="control-label" for="gambarproduk" style="color:white">Gambar Produk</label>
                     <img src="gambarproduk/<?= $produk['gambarproduk'];  ?>" style="width: : 300px;"> <br><br>
                     <input type="file" name="gambarproduk" id="gambarproduk">
                    </div>
                       
                            <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="editproduk">Simpan</button>
                                    <button class="btn btn-danger" type="button">
                                        <a href="produk.php" style="color : white">
                                        <span  aria-hidden="true" >
                                        Batal</span></a>
                                    </button>
                                </div>
                </form>
            </div>
        </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>