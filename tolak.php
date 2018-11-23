<?php  
require'function.php';

$id = $_GET["id"];

if( tolak ($id) > 0){
    echo "
        <script>
        alert('data behasil ditolak');
        document.location.href = 'profil.php'
        </script>
        ";
} else{
    echo "
        <script>
        alert('data gagal ditolak');
        document.location.href = 'profil.php'
        </script>
        ";
}

?>