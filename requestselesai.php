<?php  
require'function.php';

$id_request = $_GET["id_request"];

if( verifrequestselesai ($id_request) > 0){
    echo "
        <script>
        alert('pemesanan telah selesai');
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