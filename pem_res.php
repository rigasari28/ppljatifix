<?php  
require'function.php';

$id = $_SESSION['id'];
//ambil data url
$id_request = $_GET["id_request"];
//query data mahasiswa berdasarkan id
$pe_re = query("SELECT id_request, pembayaran FROM request WHERE id_request = $id_request")[0];


if (isset($_POST["pembayaranrequest"])){
    
    
    if (pembayaranr_pm ( $_POST) > 0){
        echo "
        <script>
        alert('upload pembayaran berhasil');
        document.location.href = 'Cus_Pemesanan.php'
        </script>
        ";

    } else {
        echo "
        <script>
        alert('upload pembayaran gagal');
        document.location.href = 'Cus_Pemesanan.php'
        </script>
        ";
    }
}
// $id_request = $_GET["id_request"];
// $request = query("SELECT * FROM request WHERE id_request = $id_request")[0];
// if( pembayaranr_pm ($id_request) > 0){
//     echo "
//         <script>
//         alert('Upload pembayaran berhasil');
//         document.location.href = 'Cus_Pemesanan.php'
//         </script>
//         ";
// } else{
//     echo "
//         <script>
//         alert('Upload pembayaran gagal');
//         document.location.href = 'Cus_Pemesanan.php'
//         </script>
//         ";
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Pelanggan</title>
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
background-image: url(./gambar/f.jpg);
background-size: cover;
height: 300px

}

.thumbnail {
    border-radius: 20px;
    box-shadow: 9px 9px 6px #615126; 
    
}


.file-field.big-2 .file-path-wrapper {
  height: 3.7rem; }
  .file-field.big-2 .file-path-wrapper .file-path {
    height: 3.5rem; }


</style>

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <ul class="nav nav-tabs" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">
        <li role="presentation"><a href="cus.php ?>" style=" text-decoration:none; color:white ">Beranda</a></li>
        <li role="presentation"><a href="cus_profil.php" style="color: white;">Profil</a></li>
        <li role="presentation"><a href="cusfurniture.php" style="color: white;">Furniture</a></li>
        <li role="presentation"><a href="#" style="color: rgb(46, 38, 38);font-family: segoe ui; font-size: 20px">
                <strong> <i>Pemesanan</i> </strong> </a></li>

        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">

                <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-off" aria-hidden="true">
                        Keluar</span></button>
            </form>
        </div>
    </ul>

    
    
      <div class="container">
        <div class="row register-form" id="form">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal custom-form" id="form" style="background:rgba(0,9,0,0.3)" action="" method="post" enctype="multipart/form-data">

                    <img src="./gambar/kranjang.png" width="100" height="100">

                    <h1 style="color:white"> Upload Pembayaran</h1>
                  <input type="hidden" name="id_request" value="<?= $pe_re["id_request"]; ?>">
                  <input type="hidden" name="gambarLama" value="<?= $pe_re["pembayaran"]; ?>">
                <div class="form-group">
                       <!--  <div class="col-sm-4 label-column">
                            <label class="control-label" for="pembayaran" style="color:white">Upload Pembayaran
                            </label>
                        </div> -->
                        <div class="col-sm-4 input-column">
                            <img src="gambarpembayaranrequest/<?= $pe_re['pembayaran'];  ?>" width="400px" height="300px"   >
                            <br>
                            <br>
                            <input class="form-control" type="file" name="pembayaran" id="pembayaran"  required="">
                        </div>
                    </div>
                  <br>

                    <button class="btn btn-primary" name="pembayaranrequest" type="submit" style="border-radius:10px">Upload</button>
                </form>
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