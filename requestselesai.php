<?php  
require'function.php';
$id = $_SESSION['id'];
$id_request = $_GET["id_request"];

if( verifrequestselesai ($id_request) > 0){
    echo "
        <script>
        alert('pemesanan telah selesai');
        document.location.href = 'Cus_Pemesanan.php'
        </script>
        ";
} else{
    echo "
        <script>
        alert('data gagal diverifikasi');
        document.location.href = 'Cus_Pemesanan.php'
        </script>
        ";
}

?>