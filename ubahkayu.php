<?php 
require 'function.php';
$id = $_SESSION['id'];
//ambil data url
$idkayu = $_GET["idkayu"];
//query data mahasiswa berdasarkan id
$kayu = query("SELECT * FROM kayu WHERE idkayu = $idkayu")[0];


if (isset($_POST["editkayu"])){
    
    
    if (ubahkayu ( $_POST) > 0){
        echo "
        <script>
        alert('data behasil diubah');
        document.location.href = 'pemasokkayu.php'
        </script>
        ";

    } else {
        echo "
        <script>
        alert('data gagal diubah');
        document.location.href = 'pemasokkayu.php'
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


    <title>Pemasok</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">

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
background-image: url(./gambar/kayu.jpg);
background-size: cover;
height: 450px

}

.thumbnail {
    border-radius: 20px;
   background-color: white;
    box-shadow: 9px 9px 6px #c4a95f; 
}

#form {
    background:rgba(0,0,0,0.3);
    border-radius: 10px

}


</style>

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <ul class="nav nav-tabs" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">
        <li role="presentation"><a href="pemasok.php" style="color: white;">Home</a></li>
        <li role="presentation"><a href="profilpemasok.php" style="color: white;">Profil</a></li>
        <li role="presentation"><a href="pemasokkayu.php" style=" text-decoration:none; color: rgb(46, 38, 38);font-family: segoe ui; font-size: 20px"><strong>
                    <i>Kayu </i> </strong> </a></li>
        <li role="presentation"><a href="pemasokinformasi.php" style="color: white;">Informasi</a></li>
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

    <div class="jumbotron">
        <div class="container">
            <h1 style="color: rgb(36, 36, 51); text-shadow:  3px 3px 6px #4b4740; text-align: center"> <strong> <i>
                        Tambah Data Kayu <br>
                        Terbaik Anda <br> </i> </strong></h1>

        </div>
    </div>


    <div class="container" id="form">
        <div class="form-group" >
            <form class="bootstrap-form-with-validation" action="" method="post" enctype="multipart/form-data">
                <h2 class="text-center" style="color:white">Edit Data Kayu</h2>
                <input type="hidden" name="idkayu" value="<?= $kayu["idkayu"]; ?>">
                <input type="hidden" name="gambarLama" value="<?= $kayu["gambarkayu"]; ?>">
                <div class="form-group">
                    <label class="control-label" for="identitas" style="color:white">Nama Kayu </label>
                    <input class="form-control" name="identitas" id="identitas" required="" type="text" value="<?= $kayu["identitas"]; ?>"></input>
                </div>
               <div class="form-group">
                    <label class="control-label" for="diameter" style="color:white">Diameter Kayu </label>
                    <input class="form-control" name="diameter" id="diameter" required=""  type="text" value="<?= $kayu["diameter"]; ?>" ></input>
                </div>
               <div class="form-group">
                    <label class="control-label" for="panjang" style="color:white">Panjang Kayu </label>
                    <input class="form-control" name="panjang" id="panjang" required=""  type="text" value="<?= $kayu["panjang"]; ?>"></input>
                </div>
               <div class="form-group">
                    <label class="control-label" for="hargakayu" style="color:white">Harga Kayu </label>
                    <input class="form-control" name="hargakayu" id="hargakayu" required="" type="number" value="<?= $kayu["hargakayu"]; ?>"></input>
                </div>
               <div class="form-group">
                    <label class="control-label" for="stokkayu" style="color:white">Stok Kayu </label>
                    <input class="form-control" name="stokkayu" id="stokkayu" required=""  type="number" value="<?= $kayu["stokkayu"]; ?>"></input>
                </div>
               
                <div class="form-group">
                    <label class="control-label" for="gambarkayu" style="color:white">Gambar Kayu</label>
                    <img src="gambarkayu/<?= $kayu['gambarkayu'];  ?>" width="400px" height="300px"   >
                    <input type="file" name="gambarkayu" id="gambarkayu" style="color:white" required="">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="editkayu">Ubah</button>
                </div>
            </form>
        </div>
    </div>
<hr>
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

