<?php 
session_start();
include 'koneksi.php';
$koneksi->query("DELETE FROM pembelian WHERE id_pembelian='$_GET[id]'");
echo "<script>alert('Terhapus');</script>";
header('location:belumbyr.php');
?>

