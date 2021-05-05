<?php
/*
Hafiszah Saidatul
203040050
https://github.com/HafiszahSaidatul/pw2021_203040050
Pertemuan 7 - (19 Maret 2021)
Mempelajari mengenai Metode GET AND POST
*/
?>

<?php
// cek apakah tidak ada data di $_GET
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])
) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html">

    <head>
        <title>Detail Mahasiswa</title>
    </head>

    <body>
        <ul>
            <li><img src="img/<?= $_GET["gambar"]; ?>"> </li>
            <li><?= $_GET["nama"]; ?></li>
            <li>
                <?= $_GET["nrp"] ?>
            </li>
            <li>
                <?= $_GET["email"] ?>
            </li>
            <li>
                <?= $_GET["jurusan"] ?>
            </li>
        </ul>
        <a href="latihan1.php">Kembali ke daftra mahasiswa</a>
    </body>

    </html>