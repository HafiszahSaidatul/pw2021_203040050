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
// Koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040050');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// Tampung ke variabel mahasiswa
$mahasiswa = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1;
        foreach ($mahasiswa as $m) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="img/<?= $m['gambar']; ?>" width="100"></td>
                <td><?= $m['nrp']; ?></td>
                <td><?= $m['nama']; ?></td>
                <td><?= $m['email']; ?></td>
                <td><?= $m['jurusan']; ?></td>
                <td>
                    <a href="">ubah</a> | <a href="">hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>