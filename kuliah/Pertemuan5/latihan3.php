<?php
$mahasiswa = [
    ["Hafiszah Saidatul", "203040050", "Teknik Informatika", "Hafiszahsaidatull@gmail.com"],
    ["Nunung Ruliati", "183040050", "Teknik Informatika", "Nunungr@gmaill.com"],
    ["Kendall Jenner", "173040050", "Teknik Industri", "KendallJ@gmaill.com"]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftra Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>NRP: <?= $mhs[1]; ?></li>
            <li>Jurusan: <?= $mhs[2]; ?></li>
            <li>Email: <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
    <!-- Cara pertama -->
    <!-- <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?php echo $mhs; ?></li>
        <?php endforeach; ?>
    </ul> -->
</body>

</html>