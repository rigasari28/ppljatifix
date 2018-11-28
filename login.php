<?php 

if (isset($_POST['submit'])) {
            include 'function.php';
            $namauser = $_POST['namauser'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM user WHERE namauser='$namauser' AND password='$password'";
            $ceklogin = mysqli_query($conn,$sql);
            if (mysqli_num_rows($ceklogin) >0) {
              $get = mysqli_fetch_assoc($ceklogin);
              // die($get['id']);
              $lvl = $get['idlevel'];
              $_SESSION['id'] = $get['id'];
              $status =$get['status'];
              $namauser =$get['namauser'];
              $password =$get['password'];

              if ($lvl=="1") {
                $_SESSION['login'] = "1";
                  echo "
                    <script>
                    alert('login berhasil');
                    document.location.href = 'admin.php'
                    </script>
                  ";
                    
                  } elseif ($lvl =="2") {
                    $_SESSION['login'] = "2";
                     echo "
                    <script>
                    alert('login berhasil');
                    document.location.href = 'cus.php'
                    </script>
                  ";
                    } 
                    elseif ($lvl =="3" && $status=="verifikasi berhasil") {
                    $_SESSION['login'] = "3";
                    $_SESSION['login'] = "verifikasi berhasil";
                     echo "
                    <script>
                    alert('login berhasil');
                    document.location.href = 'pemasok.php'
                    </script>
                    ";
                    }
                     elseif ($lvl =="3" && $status=="verifikasi ditolak") {
                    $_SESSION['login'] = "3";
                    $_SESSION['login'] = "verifikasi ditolak";
                     echo "
                    <script>
                    alert('login gagal, karena verifikasi ditolak');
                    document.location.href = 'login.php'
                    </script>
                    ";
                    }
                    elseif ($lvl =="3" && $status=="belum diverivikasi") {
                    $_SESSION['login'] = "3";
                    $_SESSION['login'] = "belum diverifikasi";
                     echo "
                    <script>
                    alert('Maaf anda belum bisa login, karena belum diverifikasi');
                    document.location.href = 'login.php'
                    </script>
                    ";
                    }
                    else {
                  
                      echo "
                    <script>
                    alert('Silahkan masukkan kembali password dan username anda');
                    document.location.href = 'login.php'
                    </script>
                    ";
                    }
                  }else{
                      echo "
                    <script>
                    alert('Silahkan daftar terlebih dahulu');
                    document.location.href = 'login.php'
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
    <title>Masuk</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="MASUK.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">


   <style>
   body{
background-color: #393e46;
background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
background-repeat: inherit
}
.login-card {
    border-radius: 20px;
    background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
    margin-top: 0px;
   
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow: 5px 5px 1px #9c8741 
}
   
   
   
   </style>
  </head>
  <body>
     

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>





    <div class="container">
        <h1 style="color:white; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:70px; text-align: right;text-shadow:  5px 5px 2px #8b7445"> <i> Meubel <br> Jati Indah</i></h1>
        
        </div>
        
            <div class="login-card"><img src="./gambar/icon.jpg" class="profile-img-card">
                <p class="profile-name-card"> </p>
                <form class="form-signin" action="" method="post">
                    <input class="form-control" type="text" required="" placeholder="Username" autofocus="" name="namauser">
                    <input class="form-control" type="password" required="" placeholder="Password" name="password">
                    <div class="checkbox">
                        <div class="checkbox">
                            <label style="color:#393e46">                                 <label style="color:#"> 
                                <input type="checkbox">Ingat Saya</label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg btn-signin" name= "submit" type="submit" value="login">Masuk</button>
                </form><a href="daftar.html" class="forgot-password" style="color: #393e46">Belum Punya Akun? Daftar disini.</a>
            </div>
            <div class="container">
                    <h2 style="color:white; text-shadow:  3px 3px 6px #b49748;"> <strong> <i> Lokasi Kami </i> </strong> </h2>
                    <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7898.46361799343!2d113.67166732179106!3d-8.17938735672322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6940011c77b83%3A0x9214e371162b1e62!2sMeubel+Jati+Indah!5e0!3m2!1sid!2sid!4v1540172189438"
                        width="100%" height="250" frameborder="10" style="box-shadow:  8px 8px 1px #b49748;" allowfullscreen></iframe> <br><br>
                    <hr>
                </div>
</body>
</html>