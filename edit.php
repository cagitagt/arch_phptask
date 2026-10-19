<?php
require("koneksi/koneksi.php");
if(isset($_GET['id'])){
    $id_jurusan = $_GET['id'];
    $sql="SELECT `nama_jurusan` FROM `jurusan`
        WHERE `id_jurusan`='$id_jurusan'"; //eksekusi
    $query = mysqli_query($koneksi,$sql);
    $data = mysqli_fetch_array($query);
    $nama_jurusan = $data['nama_jurusan'];

}
?>
<!Doctype html>
<html>
    <head>
        <title>PHP MySQL</title>
    </head>
    <body>
        <p><a href="index.php">Kembali</a></p>
        <form action="konfirmasi_edit.php" method="POST">
            <label>ID Jurusan</label>
            <input type="text" name="id" value="<?php echo $id_jurusan;?>" readonly>
            <label>Nama Jurusan</label>
            <input type="text" name="nama" value="<?php echo $nama_jurusan;?>">
            <input type="submit" name="proses" value="Simpan">
        </from>
    </body>
</html>
