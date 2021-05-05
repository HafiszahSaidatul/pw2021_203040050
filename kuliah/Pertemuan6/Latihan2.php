<?php
/*
Hafiszah Saidatul
203040050
https://github.com/HafiszahSaidatul/pw2021_203040050
Pertemuan 6 - (10 Maret 2021)
Mempelajari mengenai Associative Array
*/
?>

<?php
// Array Associative
// Definisinya sama seperti array numerik, kecuali
// Key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [

        "nama" => "Hafiszah Saidatul",
        "nrp" => "203040050",
        "email" => "hafiszahsaidatull@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "mee.jpeg",
        "tugas" => [80, 90, 85]
    ],
    [
        "nama" => "Mas Aka",
        "nrp" => "123040050",
        "email" => "MaassAkka@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "masaka.jpeg",
        "tugas" => [87, 80, 85]
    ]
];


// menampilkan nilai drinkwater = 80
echo $mahasiswa[1]["tugas"][1];


?>


<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftra Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NRP: <?= $mhs["nrp"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>