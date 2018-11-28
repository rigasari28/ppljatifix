<?php  
require'function.php';

$id_request = $_GET["id_request"];

if( tolakrequest ($id_request) > 0){
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