<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include './koneksi.php';
                $query = mysqli_query($conn, "SELECT * FROM kendaraan order by IDKendaraan Asc;");
                ?>
                <center>
                    <h2><br>DATA Kendaraan</h2>
                </center>
                <a class="btn btn-primary" style="margin-bottom:15px" href="tambah.php?nama_halaman=Menambah produk kendaraan">
                    Tambah Kendaraan </a>
                <table id="table_id" class="display table table-striped table-bordered" width="100%">
                    <thead>
                     <tr>
                        <th>
                            IDKendaraan
                        </th>
                        <th>
                            Merek
                        </th>
                        <th>
                            Model
                        </th>
                        <th>
                            Tahun
                        </th>
                        <th>
                            Harga
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                    </thead>
                    <?php
                    if (mysqli_num_rows($query) > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <tbody>
                                <tr class="text-center">
                            <td> <?php echo $data["IDKendaraan"] ?> </td>
                            <td> <?php echo $data["Merek"] ?> </td>
                            <td> <?php echo $data["Model"] ?> </td>
                            <td> <?php echo $data["Tahun"] ?> </td>
                            <td> <?php echo $data["Harga"] ?> </td>
                                    <td>
                                        <a href="edit.php?IDKendaraan=<?php echo $data["IDKendaraan"] ?>" class="btn btn-warning"> Ubah
                                        </a>&nbsp;&nbsp;
                                        <a href="proses_hapus.php?IDKendaraan=<?php echo $data["IDKendaraan"] ?>" class="btn btn-danger"> Delete 
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>