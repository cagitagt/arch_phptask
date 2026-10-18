<?php
    include "service/database.php";  //koneksi dengan file database
    session_start(); //wajib ada jika pake session
    $login_message = ""; //deklarasi var, nanti dipake di form
    
    //agar ketika di halaman dashboard user gabisa login lagi. krn uda masuk hal utama
    if(isset($_SESSION["is_login"])){
        header("location: dashboard.php");
    }

    if(isset($_POST['login'])){ //jika method post diform mengandung name login maka
        $username = $_POST['username'];
        $password = $_POST['password'];
        //protect pass
        $hash_password = hash("sha256", $password); //sha256 atau md5

        $sql = "SELECT * FROM users WHERE username='$username'AND password='$hash_password'"; //jadi nanti yang masuk ke database bukan pass polosan tapi udah di protect

        //untuk mengeksekusi query lalu menampung hasilnya
        $result = $db->query($sql);

        //validate lalu ngarahin untuk pindah ke file baru
        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            //session =  agar punya data dibalik layar. ini salah satunya untuk ditampilin di halaman dashboard. jadi ini nanti username tampil di dashboard. bukan hanya dasboard semua bisa. jangan lupa naruh session_start();
            $_SESSION['username'] = $data['username']; //data dari database
            $_SESSION['is_login'] = true;//menentukan user uda login/blom

            header("location: dashboard.php");

        }else{
            $login_message = "Akun tidak ditemukan yawww";
        }
        $db->close();


/*
        //validate/ ngetes doangg
        if($result->num_rows > 0){ //jika result lebih dari nol(atau datanya ada maka)
            echo "Data ada nich";
        }else{
            echo "Gada data syg";
        }

        //untuk memunculkan data
        if($result->num_rows > 0){
            $data = $result->fetch_assoc(); //jadi value dari result akan dikeluarkan pake fetch_assoc()

            echo $data["username"];
            echo $data["password"];
            
            echo "data username adalah " . $data["username"];
            echo "data password adalah " . $data["password"];
        }else{
            echo "Data Gada";
        }
*/
    } //isset untuk pengecekan data itu sudah ada/sudah di deklarasikan dgn bener



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <?php include "layout/header.html"?> <!--menyertakan file php lain ke dalam suatu program PHP-->
    <h3>MASUK AKUN</h3>

    <i><?php echo $login_message ?></i>
    <form action="login.php" method="POST">
        <!--action = ketika disubmit diarahin ke mana. method POST = agar hasil ga di tampilkan di url, kalo pake GET ditampilin di url. SECARA DEFAULT METHOD BAKALAN GET. bahaya kalo pass ditampilin di url-->
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="login">Masuk Sekarang</button>

        <!--name = sbg identitas inputan. kalo mau ambil isi datanya panggil "name"nya. 
        button dikasih "name" sbg validasi. jadi sistem bekerja ketika setelah dipencet submit/button-->
    </form>
    <?php include "layout/footer.html"?>
</body>

</html>