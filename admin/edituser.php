<?php
    include "../koneksi/koneksi.php";
    $query_get_user=mysqli_query($koneksi,"select * from user where id_user= '".$_GET['id_user']." ' ");
     $data_user=mysqli_fetch_array($query_get_user); 
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
                <h2 ><a href="user.php" id="back-button"><i class="fa-solid fa-arrow-left" id="back-button"></i></a></h2>
                    <div class="cssanimation blurInTop">
                        <div class="card mt-4 mb-4" id="card">
                            <div class="card-header" id="card-header">
                                <h1 class="m-3">Edit User</h1>
                            </div>
                            <div class="card-body">
                            <form action="prosesedituser.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_user" value= "<?=$data_user ['id_user']; ?>" class="form-control">
                                <h5>Name</h5>
                                    <input type="text" name="nama_user" value= "<?=$data_user ['nama_user']; ?>" class="form-control" id="input-form-control" placeholder="Masukkan nama kamu" required>
                                    <br>
                                <h5>Email</h5>
                                    <input type="email" name="email" value= "<?=$data_user ['email']; ?>" class="form-control" id="input-form-control" placeholder="Masukkan email kamu" required>
                                    <br>
                                <h5>Password</h5>
                                    <input type="password" name="password" value="" class="form-control" id="input-form-control" placeholder="Masukkan password kamu" required>
                                    <br>
                                <h5>Phone numpber</h5>
                                    <input type="next" name="no_telp" value= "<?=$data_user ['no_telp']; ?>" class="form-control" id="input-form-control" placeholder="Masukkan nomor telepon kamu" required>
                                    <br>
                                <h5>Bio</h5>
                                    <input type="text" name="bio" value= "<?=$data_user ['bio']; ?>" class="form-control" id="input-form-control" placeholder="Masukkan bio tentang kamu" required>
                                    <br>
                                <h5>Status Langganan</h5>
                                <select name="id_produk" class="form-control">
                                    <option></option>
                                    <?php 
                                    include "../koneksi/koneksi.php";
                                    $query_produk=mysqli_query($koneksi, "select * from produk_langganan");
                                    while ($data_produk=mysqli_fetch_array($query_produk)) {
                                        if($data_produk['id_produk']==$data_user['id_produk'] ) {
                                        $select="selected";
                                    } else {
                                    $select="";
                                    }
                                    echo '<option value="'.$data_produk['id_produk'].'"
                                    '.$select.'>'.$data_produk['nama_produk'].'</option>';
                                    }
                                    ?>
                                </select>
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