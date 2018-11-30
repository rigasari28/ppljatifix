<?php  
require'function.php';

$idtransaksi = $_GET["idtransaksi"];

if( veriftransaksi ($idtransaksi) > 0){
    echo "
        <script>
        alert('data behasil diverifikasi');
        document.location.href = 'verifadmin.php'
        </script>
        ";
} else{
    echo "
        <script>
        alert('data gagal diverifikasi');
        document.location.href = 'verifadmin.php'
        </script>
        ";
}

?>