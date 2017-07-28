<?php
include 'koneksi.php';
// menyimpan inputan kedalam variabel
$email      = $_POST['email'];
$password   = md5($_POST['password']);

// query untuk chek data user berdasarkan inputan
$sql = "SELECT * FROM user WHERE email='$email' and password='$password'";
$user = mysqli_query($connect, $sql);

// menghitung jumlah data user yang ditemukan
$countUser = mysqli_num_rows($user);

if($countUser>0){
    // mendapatkan data user yang berhasil login
    $profile = mysqli_fetch_array($user);
    
    // memulai session
    session_start();
    // cara membuat session
    $_SESSION['nama_lengkap'] = $profile['nama_lengkap'];
    $_SESSION['status_login'] = TRUE;
    
    header("location:list_buku.php");
}else{
    header("location:login.php");
}
?>
