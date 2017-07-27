<?php 
include'header.php';
include 'koneksi.php';
$id_penulis = $_GET['id_penulis'];
$sql = mysqli_query($connect, "select * from penulis where id_penulis='$id_penulis'");
$penulis = mysqli_fetch_array($sql);
?>
<h3>Form Input Data Penulis</h3>
<form action="update_penulis.php" method="POST">
    <input type="hidden" name="id_penulis" value="<?php echo $id_penulis?>">
    <div class="form-group">
        <label>Nama Penulis</label>
        <input type="text" value="<?php echo $penulis['nama_penulis']?>" name="nama_penulis" class="form-control" placeholder="Nama Penulis">
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" value='<?php echo $penulis['tanggal_lahir']?>' name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
    </div>
    <div class="form-group">
        <label>Biografi</label>
        <textarea name="biografi" class="form-control"><?php echo $penulis['biografi']?></textarea>
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <input type="radio" name="jenis_kelamin" value="L" checked> Laki Laki
        <input type="radio" name="jenis_kelamin" value="P"> Perempuan
    </div>
    <div class="form-group">
        <label>Pendidikan Terakhir</label>
        <select name="pendidikan_terakhir" class="form-control">
            <?php
            $pendidikan_terakhir = array(
                array('singkatan' => 'sd', 'level_sekolah' => 'Sekolah Dasar'),
                array('singkatan' => 'smp', 'level_sekolah' => 'Sekolah Menengah Dasar'),
                array('singkatan' => 'sma', 'level_sekolah' => 'Sekolah Menengah Pertama'),
                array('singkatan' => 'd4', 'level_sekolah' => 'Diploma 4'),
                array('singkatan' => 'S1', 'level_sekolah' => 'Strata 1'),
                array('singkatan' => 'S2', 'level_sekolah' => 'Strata 2'),
            );
            foreach ($pendidikan_terakhir as $p) {
                echo "<option value='$p[singkatan]'";
                echo $p['singkatan']==$penulis['pendidikan_terakhir']?'selected':'';
                echo ">$p[level_sekolah]</option>";
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

