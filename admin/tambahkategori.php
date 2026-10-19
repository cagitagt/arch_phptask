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
            <!-- <div id="page-content-wrapper"> -->
                <div class="container mt-4">
                <h2 ><a href="kategori.php" id="back-button"><i class="fa-solid fa-arrow-left" id="back-button"></i></a></h2>
                    <div class="cssanimation blurInTop">
                        <div class="card mt-4 mb-4" id="card">
                            <div class="card-header" id="card-header">
                                <h1 class="m-3">Tambah Kategori</h1>
                            </div>
                            <div class="card-body">
                            <form action="prosestambahkategori.php" method="post" enctype="multipart/form-data">
                                <h5>Nama kategori</h5>
                                    <input type="text" name="nama_kategori" value="" class="form-control" id="input-form-control" placeholder="Masukkan nama kategori berita" required>
                                    <br>
                                    <p class="text-right">
                                        <input type="submit" name="tambahdata" value="Tambah Data" class="btn btn" id="btn-edit">
                                    </p> 
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>