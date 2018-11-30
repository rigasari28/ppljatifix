<?php  
require'function.php';

$idtransaksi = $_GET["idtransaksi"];

if( tolaktransaksi ($idtransaksi) > 0){
    echo "
        <script>
        alert('data behasil ditolak');
        document.location.href = 'verifadmin.php'
        </script>
        ";
} else{
    echo "
        <script>
        alert('data gagal ditolak');
        document.location.href = 'verifadmin.php'
        </script>
        ";
}

?>