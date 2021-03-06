<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan1c_203040050</title>
    <style>
        h1 {
            background-color: salmon;
            border: 2px solid black;
            margin: 0px 5px 10px 0px;
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border-radius: 100%;
        }
    </style>
</head>

<body>
    <?php for ($i = 1; $i <= 3; $y++) : ?>
        <?php for ($y = 1; $y <= $i; $y++) : ?>
            <h1><?= $i; ?></h1>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>

</body>
<!-- 2030040050 -->

</html>