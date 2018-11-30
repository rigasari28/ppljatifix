<?php 


require 'function.php';
$id = $_SESSION['id'];
$idproduk = $_GET['idproduk'];
if (isset($_POST["pesanfurniture"])){
    

    //var_dump($_POST); 
    //var_dump($_FILEs);
    // die;
    
    if (fur_pesan ( $_POST) > 0){
        echo "
        <script>
        alert('pemesanan berhasil');
        document.location.href = 'cusfurniture.php'
        </script>
        ";

    } else {
        echo "
        <script>
        alert('pemesanan gagal');
        document.location.href = 'cusfurniture.php'
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
         <li role="presentation"><a href="cus.php" style="color: white;">Beranda</a></li>
        <li role="presentation"><a href="cus_profil.php" style="color:white">Profil  </a></li>
        <li role="presentation"><a href="#" style=" text-decoration:none; color: rgb(46, 38, 38);font-family: segoe ui; font-size: 20px"> <strong> <i> Furniture </i> </strong> </a>
        </li>
        <li role="presentation"><a href="Cus_Pemesanan.php" style="color: white;">Pemesanan</a></li>

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
    <div class="container">
        <div class="jumbotron">
            <h1>Tambah Data Furniture</h1>
           
            <p></p>
        </div>
    </div>
    <div class="row register-form">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal custom-form" id="form" style="background:rgba(0,9,0,0.3)" action="" method="post" enctype="multipart/form-data">
                    <h1 style="color:white"> Produk Furniture</h1>
                  
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="jumlahpembelian" style="color:white">Jumlah Pembelian</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="number"  name="jumlahpembelian" id="jumlahpembelian" required>
                        </div>
                    </div>
                 

                       
                            <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="pesanfurniture">Pesan</button>
                                    <button class="btn btn-danger" type="button">
                                        <a href="cusfurniture.php" style="color : white">
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