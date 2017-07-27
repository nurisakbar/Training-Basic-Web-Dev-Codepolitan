<?php
include 'koneksi.php';
include'header.php';
?>
<h3>Form Input Data Buku</h3>
<form action="simpan_buku.php" method="POST">
    <div class="form-group">
        <label>Kode Buku</label>
        <input type="text" name="kode_buku" class="form-control" placeholder="Kode Buku">
    </div>
    <div class="form-group">
        <label>Judul Buku</label>
        <input type="text" name="judul_buku" class="form-control" placeholder="Judul Buku">
    </div>

    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Penulis</label>
        <select name="penulis" class="form-control">
            <?php
            $penulis = mysqli_query($connect, "select * from penulis");
            while ($p = mysqli_fetch_array($penulis)) {
                echo "<option value='$p[id_penulis]'>$p[nama_penulis]</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select name="kategori" class="form-control">
            <?php
            $kategori = mysqli_query($connect, "select * from kategori");
            while ($k = mysqli_fetch_array($kategori)) {
                echo "<option value='$k[id_kategori]'>$k[nama_kategori]</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-danger">Simpan Data</button>
        <a href="list_buku.php" class="btn btn-primary">Kembali</a>
    </div>
</form>

<?php include'footer.php'; ?>

