<?php
// menginclude konfigurasi koneksi
include 'koneksi.php';

// menyimpan data yang di input kedalam variabel
$nama_penulis   = strtoupper($_POST['nama_penulis']);
$tanggal_lahir  = $_POST['tanggal_lahir'];
$biografi       = $_POST['biografi'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$pendidikan     = $_POST['pendidikan_terakhir'];

// query untuk insert data
$sql = "Insert into penulis SET nama_penulis='$nama_penulis',tanggal_lahir='$tanggal_lahir',
        biografi='$biografi',jenis_kelamin='$jenis_kelamin',pendidikan_terakhir='$pendidikan'";

// mengeksekusi query untuk insert data
$insert = mysqli_query($connect, $sql);

/*
if($insert){
    echo "Insert Data Berhasil";
}else{
    echo "Insert Data Gagal";
}
 */

// redirect ke halaman list penulis
header("location:list_penulis.php");
?>
