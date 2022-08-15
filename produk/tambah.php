<?php
include 'setting/index.php';
$data = $produk->show();
if (isset($_POST['add'])) {
    $produk->add($_POST['nama_produk'], $_POST['keterangan'], $_POST['harga'], $_POST['jumlah']);
    echo "<script>alert('data berhasil ditambahkan!');</script>";
    echo "<script>window.location.href='index.php'</script>";
}
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
    <h3 class="text-center">Data produk</h3>
    <br>
    <h5> Form Tambah</h5>
    <br>
    <form method="post" enctype="multipart/form-data">
        <label class="form-label">Nama Produk</label>
        <input type="text" class="form-control" name="nama_produk"><br>
        <label class="form-label">Keterangan</label>
        <input type="text" class="form-control" name="keterangan"><br>
        <div class="row">
            <div class="col">
                <label class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga"><br>
            </div>
            <div class="col">
                <label class="form-label">Jumlah</label>
                <input type="number" class="form-control" name="jumlah"><br>
            </div>
        </div>
        <button name="add" class="btn btn-success">Simpan</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>