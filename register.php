<?php
    include "service/database.php";
    $register_message ="";
        session_start();//wajib ada, agar session bisa jalan
        //agar ketika di halaman dashboard user gabisa login lagi. krn uda masuk hal utama
        if(isset($_SESSION["is_login"])){
            header("location: dashboard.php");
        }

    if(isset($_POST["register"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hash_password = hash("sha256", $password);

        //try and catch block(bisa pake/ ga)
        try {
            // apa yang mau dilakukan jika tombol register di klik yaitu insert data username dan pass ke database. maka 1. buat query untuk insert data
            $sql = "INSERT INTO users (username, password) VALUES('$username', '$hash_password')";
            //penggunaan "" dan '', harus beda penggunaan gabole sama
            //validate
            if($db->query($sql)) {
                $register_message = "Daftar akun berhasil, yok login!";
            }else{
                $register_message = "Daftar aku gagal, coba lagi yaw";
            }
        }catch (mysqli_sql_exception) {//jika error mau apa?
            $register_message = "username sudah digunakan, ganti yang lain";
        }
        $db->close();
        /*kekurangan try &catch : apapun problemnya keluarnya "username sudah digunakan, ganti yang lain." bisa pake

        }catch(mysqli_sql_exception $e){
            $register_message = $e;
        }

        */

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
</head>
<body>
    <?php include "layout/header.html"?>
    <h3>DAFTAR AKUN</h3>
    <i><?= $register_message ?></i>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="register">Daftar Sekarang</button>
    </form>
    <?php include "layout/footer.html"?>
</body>
</html>