<?php
// menginclude konfigurasi koneksi
include 'koneksi.php';

// menyimpan data yang di input kedalam variabel
$nama_kategori  = $_POST['nama_kategori'];
$id_kategori    = $_POST['id_kategori'];

// query untuk insert data
$sql = "update kategori set nama_kategori='$nama_kategori' where id_kategori='$id_kategori'";

// mengeksekusi query untuk update data
$update = mysqli_query($connect, $sql);

// redirect ke halaman list kategori
header("location:list_kategori.php");
?>
