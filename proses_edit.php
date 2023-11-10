<?php 
include './koneksi.php';
// date_default_timezone_set('Asia/Jakarta');

// get variable from form input
$IDKendaraan = $_POST["IDKendaraan"];
$Merek = $_POST["Merek"];
$Model = $_POST["Model"];
$Tahun = $_POST["Tahun"];
$Harga = $_POST["Harga"];
// $updated_at = date('Y-m-d H:i:s');

// // Upload Proses
// if($_FILES["fileToUpload"]["size"]!=0){   // Jika browse image di tekan maka $_FILES akan terisi
//     $target_dir = "images/"; // path directory image akan di simpan
//     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
//         echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
//     } else {
//         echo "Sorry, there was an error uploading your file.<br>";
//     }
// }

$result = mysqli_query($conn, "UPDATE `kendaraan` set `Merek` = '$Merek', `Model` = '$Model', `Tahun` = '$Tahun', `Harga` = '$Harga' where `IDKendaraan` = '$_GET[IDKendaraan]'");

header("Location:index.php");

?>