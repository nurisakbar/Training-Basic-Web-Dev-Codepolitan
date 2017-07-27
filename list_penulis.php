<?php 
include 'koneksi.php';
include 'header.php';
?>
<h4>Data Penulis</h4>
<table class="table table-bordered">
    <tr><th width="10">NO</th>
        <th>NAMA PENULIS</th>
        <th width="130">JENIS KELAMIN</th>
        <th width="200">PENDIDIKAN TERAKHIR</th>
        <th width="120">ACTION</th>
    </tr>
    
    <?php
    $sql = "select * from penulis";
    $books = mysqli_query($connect, $sql);
    $no=1;
    while($book=  mysqli_fetch_array($books)){
    ?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $book['nama_penulis']?></td>
        <td><?php echo $book['jenis_kelamin']=='L'?'Laki Laki':'Perempuan';?></td>
        <td><?php echo $book['pendidikan_terakhir']?></td>
        <td><a href='edit_penulis.php?id_penulis=<?php echo $book['id_penulis']?>' class="btn btn-success btn-sm">Edit</a></td>
    </tr>
    <?php $no++; } ?>
</table>

<a href="input_penulis.php" class="btn btn-info btn-sm">Tambah Data</a>

<?php include 'footer.php';?>