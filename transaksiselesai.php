<?php  
require'function.php';
$id = $_SESSION['id'];
$idtransaksi = $_GET["idtransaksi"];

if( veriftransaksiselesai ($idtransaksi) > 0){
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