<?php require("koneksi/koneksi.php");
if(isset($_GET['aksi']) && isset($_GET['id'])){
    if($_GET['aksi']="hapus"){
        $id_jurusan = $_GET['id'];
        $sql = "DELETE FROM `jurusan`
                WHERE `id_jurusan`='$id_jurusan'";
        mysqli_query($koneksi,$sql);
    }
}
?>
<!Doctype html>
<html>
    <head>
        <title>PHP MySQL</title>
    </head>
    <body>
        <p><a href="tambah.php">Tambah Data</a></p>
        <table border="1">
            <tr>
                <td>No.</td>
                <td>Jurusan</td>
                <td>Aksi</td>
            </tr>
            <?php 
            $sql = "SELECT `id_jurusan`,`nama_jurusan` FROM `jurusan`
                    ORDER BY `nama_jurusan` ASC";
            $query = mysqli_query($koneksi,$sql);
            $no=1;
            while($data=mysqli_fetch_array($query)){
                $id=$data['id_jurusan'];
                $nama = $data['nama_jurusan']; 
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $nama;?></td>
                <td><a href="edit.php?id=<?php echo $id;?>">Edit</a> 
                | <a href="index.php?aksi=hapus&id=<?php echo $id;?>">Hapus</a></td> 
            </tr>
            <?php $no++;}?>

        </table>
    </body>
</html>
