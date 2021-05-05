<?php
/*
Hafiszah Saidatul
203040050
https://github.com/HafiszahSaidatul/pw2021_203040050
Pertemuan 10 - (22 APRIL 2021)
Materi pertemuan kali ini membuat mempelajari mengenai koneksi database dan insert data
*/
?>
<?php
require 'functions.php';

// Ambil id dari url
$id = $_GET['id'];

// Query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail Mahasiswa</title>
</head>

<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $m['gambar']; ?>"></li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        <li><a href="">ubah</a> | <a href="">hapus</a></li>
        <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
    </ul>


</body>

</html>