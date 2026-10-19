
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Chronicle</title>
    <link rel="stylesheet" href="./styles/profiluser.css">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c27ca334fd.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "navbar.php" ?>
    <?php
    include "../uas_pemweb_sem2/koneksi/koneksi.php";
    $query_get_user=mysqli_query($koneksi,"select * from user where id_user= '".$_SESSION['id_user']." ' ");
     $data_user=mysqli_fetch_array($query_get_user); 
    ?>
    <div class="main-container">
        <form action="proseseditprofiluser.php" method="post">
            <div class="card">
                <div class="card-header p-3" id="card-header">
                    <h2>Take a look and update your profile</h2>
                </div>
                <div class="card-body">
                    <h5>Name</h5>
                    <input type="hidden" name="id_user" value= "<?=$data_user ['id_user']; ?>" class="form-control" id="input-form-control">
                    <input type="text" name="nama_user" value= "<?=$data_user ['nama_user']; ?>" class="form-control" id="input-form-control" placeholder="Masukkan nama kamu" required>
                    <br>
                    <h5>Email</h5>
                        <input type="text" name="email" value= "<?=$data_user ['email']; ?>"  class="form-control" id="input-form-control" placeholder="Masukkan email kamu" required>
                        <br>
                    <h5>Password</h5>
                        <input type="password" name="password"  class="form-control" id="input-form-control" placeholder="Masukkan password kamu" required>
                        <br>
                    <h5>Phone number</h5>
                        <input type="next" name="no_telp" value= "<?=$data_user ['no_telp']; ?>"  class="form-control" id="input-form-control" placeholder="Masukkan nomor telepon kamu" required>
                        <br>
                    <h5>Bio</h5>
                        <input type="text" name="bio" value= "<?=$data_user ['bio']; ?>" class="form-control" id="input-form-control" placeholder="Masukkan bio tentang kamu" required>
                        <br>
                        <input type="submit" name="tambahdata" value="Change profile" class="btn" id="btn-edit"> 
                </div>
            </div>
        </form>
    </div>
</body>
</html>