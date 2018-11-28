<?php 
require 'function.php';
if (isset($_POST["daftarpm"])){
    if (tambahpm ( $_POST) > 0){
        echo "
        <script>
        alert('data behasil ditambahkan');
        document.location.href = 'pertama.php'
        </script>
        ";

    } else {
        echo "
        <script>
        alert('data gagal ditambahkan');
        document.location.href = 'daftarpm.php'
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

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Daftar Sekarang</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="daftar.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">

    <style>
        body {
    background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
    
}

#form {
   background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
    
   
}

#maps {
    background-color: none
}
</style>

</head>

<body>
    <br><br><br>

    <div class="container">
        <div class="row register-form" id="form">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal custom-form" id="form" action="" method="post" enctype="multipart/form-data">

                    <img src="./gambar/bulet.png" width="100" height="100">

                    <h1 style="color:white"> Daftar Sebagai Pembeli</h1>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="namapm" style="color:white">Nama</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="namapm" id="namapm" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column" >
                            <label class="control-label" for="namauser" style="color:white">Username
                            </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="namauser" id="namauser" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="passpm" style="color:white">Password
                            </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="Password" name="passpm" id="passpm" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="emailpm" style="color:white">Email</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="Email" name="emailpm" id="emailpm" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="alamatpm" style="color:white">Alamat</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" id="alamatpm" name="alamatpm" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="norekpm" style="color:white">No. Rekening</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="number" name="norekpm" id="norekpm" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="nopm" style="color:white">No. Telephone</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="number" name="nopm" id="nopm" required>
                        </div>
                    </div>
                 

                    <button class="btn btn-default btn-sm submit-button" type="submit" name="daftarpm" style="border-radius:10px">Daftar</button>
                </form>
            </div>
        </div>
        
    </div>
   
  
</body>

</html>