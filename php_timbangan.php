<html>
    <title> PHP-Timbangan </title>

    <body>
        <form action="PHP_timbangan.php" method="POST"> <!--ralat panggilan fail-->
            Masukkan berat anda : <input type="text" name="nilai" value="0" /> <!--ralat pada nilai-->
            <input type="submit" value="Hasil">
        </form>

        <?php //ralat
        if(POST [nilai] >=80) { 
            $result = "Anda Berat";
        } 
        ELSE {
            $result = "Berat Anda Adalah Normal";
        }
        ?> <!--ralat-->

        Mesej Untuk Anda : 
        <?php
        echo "$result";
        ?>
    </body>
</html>