<!-- 
    <?php
        if(isset($_POST['login'])){ //jika method post diform mengandung name login maka
            
            echo "Mantap Tombol login di klik";
            echo $username. ' dan '. $password; // (.) untuk misahin sting 
        } //isset untuk pengecekan data itu sudah ada/sudah di deklarasikan dgn bener
    ?>
-->


<?php 
    $nama= "Cagita";
    //$ = menentukan variabel, atau nampung data
?>

<p>
    Nama saya adalah <?php echo $nama?> 
</p>
<!-- <?php echo $nama?> atau <?= $nama?> akan manggil dan mengeluarkan value dari $nama, yaitu Cagita,
tapi jika <?php $nama?> artinya manggil value nama tapi ga dikeluarkan.-->

