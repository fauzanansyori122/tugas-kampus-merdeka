<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Halaman</title>
</head>
<body>
 
  Halaman : <?php 
  // http://localhost/php_kampus_merdeka/rabu-01-11-2023/tambah.php?nama_halaman=CONTOH%20TAMBAH
  echo $_GET["nama_halaman"];
  ?>
  <form action="proses_tambah.php" method="post">
    <table>
        <tr>
            <td>IDKendaraan</td>
            <td>:</td>
            <td><input type="text" name="IDKendaraan"></td>
        </tr>
        <tr>
            <td>Merek</td>
            <td>:</td>
            <td><input type="text" name="Merek"></td>
        </tr>
        <tr>
            <td>Model</td>
            <td>:</td>
            <td><input type="text" name="Model"></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>:</td>
            <td><input type="number" name="Tahun"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="Harga"></td>
        </tr>
    </table>
    <input onclick="alert('Apakah Anda Sudah OK?!')" type="submit" name="Submit" value="Save">
    </form>
</body>
</html>