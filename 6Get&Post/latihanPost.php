<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body> 
    <!-- JIKA INGIN "Selamat datang, nama" KETIKA DI SUBMIT DAN TAMPIL DI HALAMAN INI, MAKA ACTION HARUS DIKOSONGI(agar default) -->

    <?php if(isset($_POST["nama"])) :?> <!-- apakah $_POST["nama"] sudah ada/sudah diisi? maka jika sudah lakukan-->
        <h1>Selamat datang, <?= $_POST["nama"]; ?></h1>
    <?php endif ?>

    <hr>

    <!-- 
    - type dan name harus ada agar post-nya jalan
    - atribut wajib dalam form : action(data didalamnya dikirim ke halaman ini, jika kosong maka akan dikirim ke halamannya sendiri), method (metode request, defaultnya get(data akan tampil di url)) 
    -->

    <form action="" method="post">
        <label for="">Masukkan nama : </label>
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>