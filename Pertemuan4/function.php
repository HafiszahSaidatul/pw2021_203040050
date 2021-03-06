<?php
/*
Hafiszah Saidatul
203040050
https://github.com/HafiszahSaidatul/pw2021_203040050
Pertemuan 4 - (25 februari 2021)
Mempelajari mengenai Function
*/

function salam($waktu = "Datang", $nama = "Hafiszah") {
    return "Selamat $waktu, $nama!";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Malam", "Hafizasaidatll"); ?></h1>
</body>
</html>


