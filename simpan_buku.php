<?php
// menginclude konfigurasi koneksi
include 'koneksi.php';

// menyimpan data yang di input kedalam variabel
$kode_buku      = $_POST['kode_buku'];
$judul_buku     = $_POST['judul_buku'];
$deskripsi      = $_POST['deskripsi'];
$penulis        = $_POST['penulis'];
$kategori       = $_POST['kategori'];




// query untuk insert data
$sql = "Insert into buku SET kode_buku='$kode_buku',judul_buku='$judul_buku',
        deskripsi='$deskripsi',id_penulis='$penulis',id_kategori='$kategori'";

// mengeksekusi query untuk insert data
$insert = mysqli_query($connect, $sql);

/*
if($insert){
    echo "Insert Data Berhasil";
}else{
    echo "Insert Data Gagal";
}
 */

header("location:list_buku.php");
?>
