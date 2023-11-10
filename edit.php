<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
  EDIT PAGE
  <?php
    include './koneksi.php';

    $kendaraan = mysqli_query($conn,"SELECT * from kendaraan where IDKendaraan='$_GET[IDKendaraan]'");

    while($k = mysqli_fetch_array($kendaraan)){
        $IDKendaraan = $k["IDKendaraan"];
        $Merek = $k["Merek"];
        $Model = $k["Model"];
        $Tahun = $k["Tahun"];
        $Harga = $k["Harga"];
    }
  ?>
  <form action="proses_edit.php?IDKendaraan=<?php echo $IDKendaraan ?>" method="post" enctype="multipart/form-data">
    <table>
        <!-- <tr>
            <td colspan="3"><img src="" width="100"></td>
        </tr> -->
        <tr>
            <td>IDKendaraan</td>
            <td>:</td>
            <td><input type="text" name="IDKendaraan" disabled value="<?php echo $IDKendaraan ?>"></td>
        </tr>
        <tr>
            <td>Merek</td>
            <td>:</td>
            <td><input type="text" name="Merek" value="<?php echo $Merek ?>"></td>
        </tr>
        <tr>
            <td>Model</td>
            <td>:</td>
            <td><input type="text" name="Model" value="<?php echo $Model ?>"></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>:</td>
            <td><input type="number" name="Tahun" value="<?php echo $Tahun ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="Harga" value="<?php echo $Harga ?>"></td>
        </tr>
    </table>
    <input onclick="alert('Apakah Anda Sudah OK?!')" type="submit" name="submit" value="Simpan">
  </form>
</body>
</html>