<?php 
include 'koneksi.php';

$result1 = mysqli_query($conn, "DELETE FROM pesananpelanggan WHERE IDKendaraan = '$_GET[IDKendaraan]'");
$result2 = mysqli_query($conn, "DELETE FROM kendaraan WHERE IDKendaraan = '$_GET[IDKendaraan]'");

header("Location:index.php");

?>