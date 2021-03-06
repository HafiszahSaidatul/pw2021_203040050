<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tugas1_203040050</title>
    <style>
        .kotak {
            width: 50px;
            border: 2px solid black;
            height: 50px;
            display: inline-block;
        }

        .salmon {
            background-color: salmon;
        }

        .biru {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <?php for ($kolom = 1; $kolom <= 6; $kolom++) :
        for ($baris = 1; $baris <= 6; $baris++) :

            if ($kolom % 2 == !0) :
                if ($baris % 2 == !0) : ?>
                    <div class="kotak biru"></div>
                <?php else : ?>
                    <div class="kotak salmon"></div>
                <?php endif; ?>

                <?php else :
                if ($baris % 2 == !0) : ?>
                    <div class="kotak salmon"></div>
                <?php else : ?>
                    <div class="kotak biru"></div>
                <?php endif; ?>
            <?php endif; ?>

        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
<!-- 203040050 -->

</html>