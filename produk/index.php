<?php
include 'setting/index.php';
$data = $produk->show();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Produk</title>
</head>

<body class="container">
    <br>
    <h3 class="text-center">Data Produk</h3>
    <br>

    <br>
    <a href="tambah.php" class="btn btn-success">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($data as $jey => $data) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $data['nama_produk']; ?></td>
                    <td><?= $data['keterangan']; ?></td>
                    <td><?= $data['harga']; ?></td>
                    <td><?= $data['jumlah']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-info">Edit</a>
                        <a href="hapus.php?id=<?= $data['id'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>