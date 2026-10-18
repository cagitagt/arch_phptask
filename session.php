<?php
session_start();
$_SESSION['id_user'] = '1234';
if(isset($_SESSION['id_user'])){
    echo 'Session sebelum dihapus: ' . $_SESSION['id_user'] . '<br>';
}else{
    echo 'tidak ada session <br>';
}
// di sini muncul Session sebelum dihapus: 1234
unset($_SESSION['id_user']);
if(isset($_SESSION['id_user'])){
    echo 'Session sebelum dihapus: ' . $_SESSION['id_user'] . '<br>';
}else{
    echo 'tidak ada session <br>';
}
// di sini muncul tidak ada session
?>



<!-- ---------------------------------------- -->

<!-- 
Sebuah sesi merupakan bentuk interaksi antara sebuah client dengan server dalam selang waktu tertentu.


session_start (); -> mengawali session
session_destroy (); -> mengakhiri session
$_SESSION['id_user'] = '12345';
echo $_SESSION['id_user']; -> memanggil var session
unset $_SESSION['id_user']; -> menghapus var session
session_unset (); -> menghapus semua session 
-->