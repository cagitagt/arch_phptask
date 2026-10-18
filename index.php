<?php
include "database.php";

$nim    = "";
$nama   = "";
$alamat = "";
$fakultas = "";
$sukses = "";
$error  = "";

// untuk edit data
if (isset($_GET["op"])) {
    $op = $_GET["op"];
} else {
    $op = "";
}
// untuk delete data
if($op == 'delete'){
    $id     = $_GET["id"];
    $sql1   = "DELETE FROM mahasiswa WHERE id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error = "Gagal menghapus data";
    }
}


// menampilkan data saat edit data
if ($op == "edit") {
    $id     = $_GET["id"];
    $sql1   = "SELECT * FROM mahasiswa WHERE id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);

    // Cek apakah query menghasilkan data
    if($q1 && mysqli_num_rows($q1) > 0){
        $r1     = mysqli_fetch_array($q1);
        $nim        = $r1["nim"];
        $nama       = $r1["nama"];
        $alamat     = $r1["alamat"];
        $fakultas   = $r1["fakultas"];   
    }else{
        $error = "Data tidak ditemukan";
    }
}
//


// CREATE DATA
if (isset($_POST["simpan"])) {
    $nim        = $_POST["nim"];
    $nama       = $_POST["nama"];
    $alamat     = $_POST["alamat"];
    $fakultas   = $_POST["fakultas"];

    //jika nim,nama,alamat,fakultas ada isinya maka
    if ($nim && $nama && $alamat && $fakultas) {
            if($op == 'edit'){ //UNTUK PROSES UPDATE
                $sql1 = "UPDATE mahasiswa SET nim ='$nim', nama = '$nama', alamat = '$alamat', fakultas = '$fakultas' WHERE id = '$id'";
                $q1 = mysqli_query($koneksi, $sql1);
                if($q1){
                    $sukses = "Data berhasil diupdate";
                }else{
                    $error = "Data gagal diupdate";
                }
            }else{ //UNTUK PROSES INSERT
                $sql1   = "INSERT INTO mahasiswa(nim, nama, alamat, fakultas) VALUES ('$nim', '$nama', '$alamat', '$fakultas')";
                $q1     = mysqli_query($koneksi, $sql1);
                if ($q1) {
                    $sukses = "Berhasil memasukkan data baru";
                } else {
                    $error  = "Gagal memasukkan data baru";
                }
            }
    } else {
        $error = "Silahkan masukkan semua data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px;
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">

        <!-- UNTUK CREATE -->
        <!-- Untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($error) { //ketika var error ada isinya maka
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php"); //5 -> detik
                }
                ?>
                    
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?= $sukses ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php"); //5 -> detik
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <select name="fakultas" id="fakultas" class="form-control">
                                <option value="">- Pilih Fakultas -</option>
                                <option value="saintek" <?php if ($fakultas == "saintek") echo "selected" ?>>Saintek</option>
                                <option value="soshum" <?php if ($fakultas == "soshum") echo "selected" ?>>Soshum</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>


        <!-- UNTUK READ -->
        <!-- Untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "SELECT * FROM mahasiswa ORDER BY id desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut = 1;

                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2["id"];
                            $nim        = $r2["nim"];
                            $nama       = $r2["nama"];
                            $alamat     = $r2["alamat"];
                            $fakultas   = $r2["fakultas"];

                        ?>
                            <tr>
                                <th scope="row"><?= $urut++ ?></th>
                                <td scope="row"><?= $nim ?></td>
                                <td scope="row"><?= $nama ?></td>
                                <td scope="row"><?= $alamat ?></td>
                                <td scope="row"><?= $fakultas ?></td>

                                <td scope="row">
                                    <!-- UNTUK UPDATE DATA-->
                                    <a href="index.php?op=edit&id=<?php echo $id?>"><button type="button" class="btn btn-warning">Edit</button></a>

                                    <!-- UNTUK DELETE DATA -->
                                    <a href="index.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>