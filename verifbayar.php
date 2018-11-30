<?php  
require'function.php';

$id_tk = $_GET["id_tk"];

if( bayarverif ($id_tk) > 0){
    echo "
        <script>
        alert('data behasil diverifikasi');
        document.location.href = 'pemasokverifikasi.php'
        </script>
        ";
} else{
    echo "
        <script>
        alert('data gagal diverifikasi');
        document.location.href = 'pemasokverifikasi.php'
        </script>
        ";
}

?>