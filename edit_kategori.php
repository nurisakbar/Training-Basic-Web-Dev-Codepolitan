<?php 
include'header.php';
include'koneksi.php';

$id_kategori = $_GET['id_kategori'];
$sql = mysqli_query($connect, "select* from kategori where id_kategori='$id_kategori'");
$kategori = mysqli_fetch_array($sql);
?>
<h3>Form Input Data Kategori</h3>
<form action="update_kategori.php" method="POST">
    <input type="hidden" name="id_kategori" value="<?php echo $id_kategori;?>">
    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" name="nama_kategori" value="<?php echo $kategori['nama_kategori']?>" class="form-control" placeholder="Nama kategori">
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-danger">Simpan Data</button>
        <a href="list_buku.php" class="btn btn-primary">Kembali</a>
    </div>
</form>

<?php include'footer.php'; ?>

