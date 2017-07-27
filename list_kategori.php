<?php 
include 'koneksi.php';
include 'header.php';
?>
<h4>Data Kategori</h4>
<table class="table table-bordered">
    <tr><th width="10">NO</th>
        <th>NAMA KATEGORI</th>
        <th>ACTION</th>
    </tr>
    
    <?php
    $sql = "select * from KATEGORI";
    $books = mysqli_query($connect, $sql);
    $no=1;
    while($book=  mysqli_fetch_array($books)){
    ?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $book['nama_kategori']?></td>
        <td><a href='edit_kategori.php?id_kategori=<?php echo $book['id_kategori']?>' class="btn btn-success btn-sm">Edit</a></td>
    </tr>
    <?php $no++; } ?>
</table>

<a href="input_kategori.php" class="btn btn-info btn-sm">Tambah Data</a>

<?php include 'footer.php';?>