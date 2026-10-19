<?php
    include "../koneksi/koneksi.php";
    $query_get_berita=mysqli_query($koneksi,"select * from berita where id_berita= '".$_GET['id_berita']." ' ");
     $data_berita=mysqli_fetch_array($query_get_berita); 
    session_start();
    $id_admin = $_SESSION['id_admin'];
    ?>
<html>
    <head>
        <title>Admin Chronicle</title>
        <link rel="stylesheet" href="../admin/komponen/navbar.css">
        <link rel="stylesheet" href="../admin/css/allfile.css">
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- font -->
        <style>@import url('https://fonts.googleapis.com/css2?family=Cactus+Classical+Serif&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');</style>
        <script src="https://kit.fontawesome.com/c27ca334fd.js" crossorigin="anonymous"></script>
        <!-- cssanimation.io -->
        <link href="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/cssanimation.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <div class="container mt-4">
                <h2 ><a href="berita.php" id="back-button"><i class="fa-solid fa-arrow-left" id="back-button"></i></a></h2>
                    <div class="cssanimation blurInTop">
                        <div class="card mt-4 mb-4" id="card">
                            <div class="card-header" id="card-header">
                                <h1 class="m-3">Edit Berita</h1>
                            </div>
                            <div class="card-body">
                                <form action="proseseditberita.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_berita" value= "<?=$data_berita ['id_berita']; ?>" class="form-control">
                                    <!-- <input type="hidden" name="id_admin" value= "<?php echo $id_admin;?>" class="form-control"> -->
                                    <h5>Nama berita</h5>
                                        <input type="text" name="nama_berita" value= "<?=$data_berita ['nama_berita']; ?>" class="form-control" id="input-form-control" placeholder="Masukkan nama berita" required>
                                        <br>
                                    <!-- <h5>Nama user</h5>
                                        <select name="id_user" class="form-control">
                                            <option></option>
                                            <?php 
                                            include "../koneksi/koneksi.php";
                                            $query_user=mysqli_query($koneksi, "select * from user");
                                            while ($data_user=mysqli_fetch_array($query_user)) {
                                                if($data_user['id_user']==$data_berita['id_user'] ) {
                                                $select="selected";
                                            } else {
                                            $select="";
                                            }
                                            echo '<option value="'.$data_user['id_user'].'"
                                            '.$select.'>'.$data_user['nama_user'].'</option>';
                                            }
                                            ?>
                                        </select> -->
                                        <br>
                                    <h5>Nama kategori</h5>
                                        <select name="id_kategori" class="form-control">
                                            <option></option>
                                            <?php 
                                            include "../koneksi/koneksi.php";
                                            $query_kategori=mysqli_query($koneksi, "select * from kategori");
                                            while ($data_kategori=mysqli_fetch_array($query_kategori)) {
                                                if($data_kategori['id_kategori']==$data_berita['id_kategori'] ) {
                                                $select="selected";
                                            } else {
                                            $select="";
                                            }
                                            echo '<option value="'.$data_kategori['id_kategori'].'"
                                            '.$select.'>'.$data_kategori['nama_kategori'].'</option>';
                                            }
                                            ?>
                                        </select>    
                                        <br>
                                    <h5>Foto :</h5>
                                        <img src="image/foto/<?php echo $data_berita['foto_berita']; ?>" style="width: 120px;">
                                        <input type="file" name="foto_berita" value= "<?=$data_berita ['foto_berita']; ?>" required/>
                                        <br>
                                    <h5>Deskripsi berita</h5>
                                        <textarea name="konten_berita" class="form-control" id="input-form-control" placeholder="Masukkan deskripsi berita" rows="4" cols="50" required><?=$data_berita ['konten_berita']; ?></textarea>
                                        <br>
                                        <p class="text-right">
                                            <input type="submit" name="editdata" value="Edit Data" class="btn btn-lg" id="btn-edit">
                                        </p> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>