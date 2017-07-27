<?php 
include 'koneksi.php';
include 'header.php';
?>
<h4>Data Buku</h4>
<table class="table table-bordered">
    <tr><th width="10">NO</th>
        <th width="110">KODE BUKU</th>
        <th>JUDUL</th>
        <th width="180">PENULIS</th>
        <th width="110">KATEGORI</th>
        <th width="140">ACTION</th>
    </tr>
    
    <?php
    $sql = "select p.nama_penulis,b.judul_buku,b.kode_buku,k.nama_kategori
            from buku as b,penulis as p, kategori as k 
            where p.id_penulis=b.id_penulis and b.id_kategori=k.id_kategori order by b.kode_buku";
    $books = mysqli_query($connect, $sql);
    $no=1;
    while($book=  mysqli_fetch_array($books)){
    ?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $book['kode_buku']?></td>
        <td><?php echo $book['judul_buku']?></td>
        <td><?php echo $book['nama_penulis']?></td>
        <td><?php echo $book['nama_kategori']?></td>
        <td>
            <a href="edit_buku.php?kode_buku=<?php echo $book['kode_buku']?>" class="btn btn-success btn-sm">Edit</a>
            <a href="delete_buku.php?kode_buku=<?php echo $book['kode_buku']?>" class="btn btn-success btn-sm">Delete</a></td>
    </tr>
    <?php $no++; } ?>
</table>

<a href="input_buku.php" class="btn btn-info btn-sm">Tambah Data</a>

<?php include 'footer.php';?>