<?php
/*
Hafiszah Saidatul
203040050
https://github.com/HafiszahSaidatul/pw2021_203040050
Pertemuan 12 - (7 MEI 2021)
Materi pertemuan kali ini membuat mempelajari mengenai (login dan registrasi)
*/
?>

<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

$id = $_GET['id'];

$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <H3>DETAIL MAHASISWA</H3>
    <ul>
        <img src="img/<?= $m['gambar']; ?>" width="100">
        <li>Nrp : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        <li><a href="ubah.php?id=<?= $m['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('Apakah anda yakin?');">hapus</a></li>
        <li><a href="index.php">kembali ke daftar mahasiswa</a></li>
    </ul>
</body>

</html>