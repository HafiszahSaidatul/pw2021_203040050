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
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1;
        foreach ($mahasiswa as $m) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="img/<?= $m['gambar']; ?>" width="90"></td>
                <td><?= $m['nama']; ?></td>
                <td>
                    <a href="detail.php?id=<?= $m['id']; ?>">Lihat detail</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>