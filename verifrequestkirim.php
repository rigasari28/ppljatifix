<?php  
require'function.php';

$id_request = $_GET["id_request"];

if( verifrequestkirim ($id_request) > 0){
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