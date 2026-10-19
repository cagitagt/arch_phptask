<?php
include('../koneksi/koneksi.php');
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
  if($_GET['aksi']=='hapus'){
     $id_user = $_GET['data'];

   //hapus data
   $sql_dm = "delete from `user` where `id_user` = '$id_user'";
   mysqli_query($koneksi,$sql_dm);
 }
}
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
        <!-- Page content wrapper-->
        <div class="d-flex" id="wrapper">
            <?php include "../admin/komponen/navbar.php" ?>
            <div id="page-content-wrapper">
                <!-- Page content-->
                <div class="container-fluid">
                    <div class="cssanimation blurInTop">
                        <h1 class="mt-4">Data User</h1>
                        <!-- <a href="tambahuser.php"><button class="btn mt-4" id="btn-tambahData"><i class="fa-solid fa-plus"></i> Tambah data</button></a> -->
                    </div>
                    <div class="cssanimation blurInTop">
                        <div class="card mt-3" id="card">
                            <div class="card-header pt-3" id="card-header">
                                <form method="POST" action="user.php" class="d-flex">
                                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search" id="input-form-control">
                                    <button class="btn" id="btn-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">Id user</th> -->
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">No telp</th>
                                        <th scope="col">Bio</th>
                                        <th scope="col">Status langganan</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include "../koneksi/koneksi.php";
                                    if (isset($_POST['cari'])) {
                                        $cari = $_POST['cari'];
                                        $query_user = mysqli_query($koneksi, "select * from user where id_user = '$cari' or nama_user like '%$cari%' ");
                                    }
                                    else{
                                        $query_user = mysqli_query($koneksi, "select * from user join produk_langganan on produk_langganan.id_produk=user.id_produk");
                                    }
                                    while($data_user = mysqli_fetch_array($query_user)){
                                ?>
                                    <tr>
                                        <!-- <td><?=$data_user['id_user']?></td> -->
                                        <td><?=$data_user['nama_user']?></td>
                                        <td><?=$data_user['email']?></td>
                                        <td><?=$data_user['no_telp']?></td>
                                        <td><?=$data_user['bio']?></td>
                                        <td><?=$data_user['nama_produk']?></td>
                                        <td>
                                            <!-- <a href="edituser.php?id_user=<?=$data_user['id_user']?>"><button class="btn" id="btn-edit"><i class="fa-solid fa-pen"></i> Edit</button></a> -->
                                            <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $data_user['nama_user']; ?>?')) window.location.href = 'user.php?aksi=hapus&data=<?php echo $data_user['id_user'];?>'">
                                                <button class="btn" id="btn-delete"><i class="fa-solid fa-trash"></i> Hapus</button>
                                            </a>
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
                </div>    
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../admin/komponen/navbar.js"></script>
    </body>
</html>