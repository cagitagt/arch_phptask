<?php
    if($_POST){
        $id_produk=$_POST['id_produk'];
        $id_user=$_POST['id_user'];
        if(empty($id_produk)){
            echo "<script>alert('id produk tidak boleh kosong');location.href='konfirmasitransaksi.php'</script>";
        }elseif(empty($id_user)){
            echo "<script>alert('Login first');location.href='konfirmasitransaksi.php'</script>";
        }
        else {
            include "../uas_pemweb_sem2/koneksi/koneksi.php";
            $insert=mysqli_query($koneksi,"insert into transaksi (id_produk, id_user)
            value ('".$id_produk."', '".$id_user."')") or 
            die(mysqli_error($koneksi));
            if($insert){
                echo "<script>alert('Transaction Success');location.href='index.php';</script>";
            }
            else {
                echo "<script>alert('Transaction Failed');location.href='tambahtransaksi.php';</script>";
            }
        }
    }
?>