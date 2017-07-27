<?php include'header.php'; ?>
<h3>Form Input Data Kategori</h3>
<form action="simpan_kategori.php" method="POST">
    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" name="nama_kategori" class="form-control" placeholder="Nama kategori">
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-danger">Simpan Data</button>
        <a href="list_buku.php" class="btn btn-primary">Kembali</a>
    </div>
</form>

<?php include'footer.php'; ?>

