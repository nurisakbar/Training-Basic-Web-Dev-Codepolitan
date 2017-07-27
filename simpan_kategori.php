<?php
// menginclude konfigurasi koneksi
include 'koneksi.php';

// menyimpan data yang di input kedalam variabel
$nama_kategori  = $_POST['nama_kategori'];

// query untuk insert data
$sql = "Insert into kategori set nama_kategori='$nama_kategori'";

// mengeksekusi query untuk insert data
$insert = mysqli_query($connect, $sql);

// redirect ke halaman list kategori
header("location:list_kategori.php");
?>
