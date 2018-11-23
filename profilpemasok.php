<?php 
require 'function.php';
//ambil data url
$id = $_SESSION["id"];
//query data mahasiswa berdasarkan id
$user = query("SELECT * FROM user WHERE id = $id")[0];






 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Pemasok</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    
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
        <li role="presentation"><a href="pemasok.php" style="color: white;">Home</a></li>
        <li role="presentation"><a href="profilpemasok.php" style=" text-decoration:none; color: rgb(46, 38, 38);font-family: segoe ui; font-size: 20px"><strong>
                <i>Profil </i> </strong> </a></li>
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

    <div class="container">
        <div class="row register-form" id="form">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal custom-form" action="" method="post" enctype="multipart/form-data" id="form" style="background:rgba(0,9,0,0.3)">

                    <img src="./gambar/bulet.png" width="100" height="100">

                    <h1 style="color:white"> Data Diri</h1>
                    <input type="hidden" name="id" value="<?= $user["id"]; ?>">
                    <input type="hidden" name="gambarLama" value="<?= $user["noper"]; ?>">
                    
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="nama" style="color:white">Nama</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="nama" id="nama"value="<?= $user["nama"]; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="namauser" style="color:white">Username</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="namauser" id="namauser" value="<?= $user["namauser"]; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="pawssword" style="color:white">Password
                            </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="Password" name="password" id="password" value="<?= $user["password"]; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="email" style="color:white">Email</label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <input class="form-control" type="email" name="email" id="email" value="<?= $user["email"]; ?>">
                            </div>
                        </div>
                    <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="namaperusahaan" style="color:white">Nama Perusahaan</label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <input class="form-control" type="text" name="namaperusahaan" id="namaperusahaan" value="<?= $user["namaperusahaan"]; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="no_rek" style="color:white">No Rekening</label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <input class="form-control" type="number" name="no_rek" id="no_rek" value="<?= $user["no_rek"]; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="alamat" style="color:white">Alamat</label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <input class="form-control" type="text" name="alamat" id="alamat" value="<?= $user["alamat"]; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="no_hp" style="color:white">No Telephone</label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <input class="form-control" type="number" name="no_hp" id="no_hp" value="<?= $user["no_hp"]; ?>">
                            </div>
                        </div>
                        
                                <div class="form-group">
                                        <div class="col-sm-4 label-column">
                                        <label class="control-label" for="file-input" style="color:white">Bukti Legal Kayu</label>
                                    </div>
                                    <div class="col-sm-6 input-column">
                                        <input type="file" name="file-input" id="file-input" style="color:white">
                                    </div>
                                    </div>
    
                        <button class="btn btn-default btn-sm submit-button" type="submit"  name ="editprofil"
                        style="border-radius:10px">Submitt</button>
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

</html>