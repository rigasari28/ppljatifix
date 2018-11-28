<?php  
 
require 'function.php';
//ambil data url
$id = $_SESSION['id'];

//query data mahasiswa berdasarkan id
$sql = query("SELECT * FROM user WHERE id = $id")[0];

?>

<?php  

$id = $_SESSION['id'];
if (isset($_POST["editprofilcus"])){
    
     
    $nama = $_POST['nama'];
    $namauser = $_POST['namauser'];
    $password = $_POST['password'];
    $email = $_POST['email']; 
    $alamat = $_POST['alamat'];
    $no_rek = $_POST['no_rek'];
    $no_hp = $_POST['no_hp'];
    $sql = "UPDATE `user` SET `nama`='$nama',`namauser`='$namauser',`password`='$password',`email`='$email',
    `alamat`='$alamat',`no_rek`='$no_rek',`no_hp`='$no_hp' WHERE id=$id";
      $query = mysqli_query($conn,$sql);
   
      
    if($query){
        ?>
        <script type="text/javascript">
            alert("berhasil diubah");
            window.location.href="cus_profil.php";
        </script>
        
        <?php  } else {
            ?>
            <script>
            alert("asd");
            </script><?php
        }   
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Profil</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">


    <style>
        body {
    background-image: linear-gradient(to top, #e6b980 0%, #eacda3 100%);
    background-size: cover

}

#form {
    border-radius: 20px;
}

p   {
    color: white;
    font-family: calibri;
    font-style: italic

}

.jumbotron {
background-image: url(./gambar/f.jpg);
background-size: cover;
height: 500px

}

.thumbnail {
    border-radius: 20px;
    box-shadow: 9px 9px 6px #615126; 
}


</style>

</head>

<body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <ul class="nav nav-tabs" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">
        <li role="presentation"><a href="cus.php" style="color: white;">Beranda</a></li>
        <li role="presentation"><a href="#" style=" text-decoration:none; color: rgb(46, 38, 38);font-family: segoe ui; font-size: 20px"><strong>
                    <i>Profil </i> </strong> </a></li>
        <li role="presentation"><a href="cusfurniture.php" style="color: white;">Furniture</a></li>
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

    <div class="container">
        <div class="row register-form" id="form">
            <div class="col-md-8 col-md-offset-2">
                <form method="post" class="form-horizontal custom-form" id="form" style="background:rgba(0,9,0,0.3)">

                    <img src="./gambar/bulet.png" width="100" height="100">

                    <h1 style="color:white"> Data Diri</h1>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="nama" style="color:white">Nama</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="nama" value="<?= $sql["nama"]; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="username" style="color:white">Username </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="namauser" value="<?= $sql["namauser"]; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="password" style="color:white">Password
                                </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="Password" name="password" value="<?= $sql["password"]; ?>" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field" style="color:white">Email
                                </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="email" name="email" value="<?= $sql["email"]; ?>"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="text-input-field" style="color:white">Alamat
                                </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="alamat" value="<?= $sql["alamat"]; ?>" required>
                        </div>
                        </div>
                     <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="number-input-field" style="color:white">No Rekening
                                </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="number" name="no_rek" value="<?= $sql["no_rek"]; ?>" required>
                        </div>
                        </div>
                         <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="number-input-field" style="color:white">No HP
                                </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="number" name="no_hp" value="<?= $sql["no_hp"]; ?>" required>
                        </div>
                    </div>
                    
                    
                    <button class="btn btn-default btn-sm submit-button" type="submit" style="border-radius:10px;background-color: red">
                         <a href="cus_profil.php" style="color : white">
                                        <span  aria-hidden="true" >
                                        Batal</span></a>
                    </button>
                              
                    <button class="btn btn-default btn-sm submit-button" type="submit" name="editprofilcus" style="border-radius:10px">Simpan</button>
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
                width="100%" height="250" frameborder="10" style="border:0" allowfullscreen ></iframe> <br><br>
                <hr>
            </div>
            </div>

</body>
</html>