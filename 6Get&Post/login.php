<?php
//CEK APAKAH TOMBOL SUDAH TEKAN ATAU BELUM
//$_POST["berdasar yang ditulis di name di form"]

    if(isset($_POST["submit"])) {

        //CEK USERNAME DAN PASSWORD
        if($_POST["username"] == "admin" && ($_POST["password"] == "123")){
            
            //JIKA BENAR, REDIRECT KE HALAMAN ADMIN
            header("Location: login2.php");
            exit;

            //JIKA SALAH, TAMPILKAN PESAN KESALAHAN DI HALAMAN, LIHAT DI ATAS BAGIAN BODY
        }else{
            $error = true; //buat var error jika benar
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ADMIN</title>
    <style>
        input {
            color: skyblue;
        }

        p {
            color: red;
            font-style: italic;
        }
    </style>
</head>

<body>

    <?php if(isset($error)) :?> <!-- jika benar ada error maka-->
        <p>Username atau password salah!</p>
    <?php endif; ?>

    <!-- 
    - kalo buat login method sangat disarankan post, agar privacy terjaga 
    - for dan id = berhubungan agar nyambung, jadi, oh label ini punya input ini. bisa dibuktikan dgn pencet label di halaman-->

    <h1>Login Admin</h1>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>