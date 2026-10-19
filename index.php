<!DOCTYPE html>
<html>
    <head>
        <title>Ini adalah PHP</title>
    </head>
    <body>
        <p>Halo voksioner!!</p>
        <p>
            <?php echo "Selamat datang di fakultas vokasi" ; ?>
        </p>
        <p>
            <?php
            $a = 5; $b = 8;
            $c = $a + $b;
            echo "Nilai c=".$c;
            ?>            
        </p>
        <p>
            <?php
            $univ = "Brawijaya";
            $selamat = "Selamat datang di Fakults vokasi";
            echo "$selamat Universitas $univ";
            echo '<br>';
            echo '$selamat Universitas $univ';
            echo '<br>';
            echo $selamat. ' Universitas ' .$univ;
            ?>            
        </p>
        <p>
            <?php
            $univ = "Brawijaya";
            $selamat = "Selamat datang di Fakults vokasi";
            echo $selamat. ' ' .$univ;
            ?>
        </p>
        <p>
            <?php
            $bunga = array("mawar","melati","anggrek");
            for(&i=0;i<3;$i++){
                echo $bunga[&i].'<br>';
            }
            ?>
        </p>
        <p>
            <?php
            $bunga = array("mawar","melati","anggrek");
            foreach($bunga as &data){
                echo $data.'<br>';
            }
            ?>
        </p>
    </body> 
</html>