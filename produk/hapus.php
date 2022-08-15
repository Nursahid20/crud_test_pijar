<?php
include 'setting/index.php';
$id = $_GET['id'];

$produk->delete($id);
echo "<script>alert('data berhasil dihapus!');</script>";
echo "<script>window.location.href='index.php'</script>";
