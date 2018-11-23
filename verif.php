<?php  
require'function.php';

$id = $_GET["id"];

if( verif ($id) > 0){
    echo "
        <script>
        alert('data behasil diverifikasi');
        document.location.href = 'profil.php'
        </script>
        ";
} else{
    echo "
        <script>
        alert('data gagal diverifikasi');
        document.location.href = 'profil.php'
        </script>
        ";
}

?>