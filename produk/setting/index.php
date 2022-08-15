<?php
$Mysqli = new mysqli("localhost", "root", "", "pijarcamp");

class produk
{
    function __construct($Mysqli)
    {
        $this->connect = $Mysqli;
    }
    function getData($id)
    {
        $data = $this->connect->query("SELECT * FROM produk where id=" . $id);
        $data = $data->fetch_assoc();
        return $data;
    }

    function show()
    {
        $data = [];
        $query = $this->connect->query("SELECT * FROM produk");
        while ($arr = $query->fetch_assoc()) {
            $data[] = $arr;
        }
        return $data;
    }
    function delete($id)
    {
        $query = $this->connect->query("DELETE FROM produk WHERE id = " . $id);
    }

    function add($nama_produk, $keterangan, $harga, $jumlah)
    {
        $this->connect->query("INSERT INTO produk VALUES('','$nama_produk', '$keterangan', '$harga', '$jumlah' )");
    }
    function edit($id, $nama_produk, $keterangan, $harga, $jumlah)
    {
        $this->connect->query("UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id=" . $id);
    }
}

$produk = new produk($Mysqli);
