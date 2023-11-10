<?php 
include './koneksi.php';
print_r($_POST);
// get variable from form input
$IDKendaraan = $_POST["IDKendaraan"];
$Merek = $_POST["Merek"];
$Model = $_POST["Model"];
$Tahun = $_POST["Tahun"];
$Harga = $_POST["Harga"];

// echo "<br>=====DEBUG QUERY======<br>";
// echo "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`, `created_at`) VALUES ('$isbn', '$judul', '$tahun', '$penerbit', '$pengarang', '$katalog', '$stok', '$harga_pinjam', '$created_at');";
// echo "<br>======================<br>";

$result = mysqli_query($conn, "INSERT INTO `kendaraan` (`IDKendaraan`, `Merek`, `Model`, `Tahun`, `Harga`) VALUES ('$IDKendaraan', '$Merek', '$Model', '$Tahun', '$Harga');");

header("Location:index.php");

?>