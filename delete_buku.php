<?php
include 'koneksi.php';
$kode_buku = $_GET['kode_buku'];
mysqli_query($connect, "delete from buku where kode_buku='$kode_buku'");
header("location:list_buku.php");
?>
