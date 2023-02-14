<html>
    <title>PHP-Timbangan</title>

    <body>
        <form action="php_timbanganv2.php" method="POST"> <!--ralat panggilan nama fail-->
            Masukkan berat anda : <input type="text" name="nilai1" value="0" /> <!--kesalahan pada nilai-->
            <input type="submit" name="hasil" />
        </form>

        <?php //ralat
        if ($_POST['nilai1'] >= 80){ 
            $result = "Anda Berat";
        }
        else {
            $result = "Berat anda adalah normal";
        }
        ?> <!--ralat-->
        Mesej  Untuk Anda : 
        <?php
        echo "$result";
        ?>
    </body>
</html>