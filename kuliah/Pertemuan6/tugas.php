<?php
$rumah = [
    [
        "nama" => "PINANG RESIDENCES",
        "harga" => "Rp 5,1 M",
        "lokasi" => "Jl. Deplu Raya No. 16, Bintaro, Pesanggrahan, Jakarta Selatan, DKI Jakarta",
        "tipe" => "House",
        "ukuran" => "274 sq.m.",
        "gambar" => "PINANG.jpg",
    ],
    [
        "nama" => "SERENIA HILLS",
        "harga" => "3,7 M ~  Rp 5,3 M",
        "lokasi" => "Jl. Karang Tengah No. 9, Lebak Bulus, Jakarta Selatan, DKI Jakarta",
        "tipe" => "House",
        "ukuran" => "263 sq.m.",
        "gambar" => "SERENIA2.jpg",
    ],
    [
        "nama" => "SOUTH GROVE",
        "harga" => "Rp 9,6 M ~  Rp 11,8 M",
        "lokasi" => "Jl. Lebak Bulus 1 No. 3, Lebak Bulus, Jakarta Selatan, DKI Jakarta",
        "tipe" => "House",
        "ukuran" => "378 sq.m.",
        "gambar" => "S3.jpg",
    ],
    [
        "nama" => "Kota Baru Parahyangan",
        "harga" => "Rp 1 M ~  Rp 9 M",
        "lokasi" => "Jalan Parahyangan Raya, Padalarang, Bandung Barat, Bandung, Jawa Barat",
        "tipe" => "House",
        "ukuran" => "378 sq.m.",
        "gambar" => "K4.jpg",
    ],
    [
        "nama" => "Southgate Residence",
        "harga" => "Rp 1,1 M ~  Rp 3,4 M",
        "lokasi" => "Jl.Raya Tanjung Barat No. 163, Jakarta Selatan, DKI Jakarta",
        "tipe" => "Apartment",
        "ukuran" => "62090 sq.m.",
        "gambar" => "AP1.jpg",
    ],
    [
        "nama" => "LRT City Ciracas : Urban Signature",
        "harga" => "Rp 570 jt ~  Rp 1,4 M",
        "lokasi" => "Jl. Penganten Ali No.88, RT.6/RW.6, Ciracas, Jakarta Timur, DKI Jakarta",
        "tipe" => "Apartment",
        "ukuran" => "62000 sq.m.",
        "gambar" => "AP2.jpg",
    ],
    [
        "nama" => "JKT Living Star",
        "harga" => "Rp 300 jt ~  Rp 1 M",
        "lokasi" => "Jakarta Timur, DKI Jakarta",
        "tipe" => "Apartment",
        "ukuran" => "52033 sq.m.",
        "gambar" => "AP3.jpg",
    ],
    [
        "nama" => "Capitol Suites",
        "harga" => "Rp 1,5 M ~  Rp 3,7 M",
        "lokasi" => "Jl. Prajurit KKO Usman Dan Harun Kav 22-24. Tugu Tani, Jakarta Pusat, DKI Jakarta",
        "tipe" => "Apartment",
        "ukuran" => "42330 sq.m.",
        "gambar" => "AP4.jpg",
    ],
];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Jual Rumah&Apartment</title>
</head>

<body>
    <h1> Jual Rumah & Apartment </h1>
    <?php foreach ($rumah as $rm) : ?>
        <ul>
            <li>
                <img src="img/<?= $rm["gambar"]; ?>">
            </li>
            <li>Nama Properti : <?= $rm["nama"]; ?></li>
            <li>Harga : <?= $rm["harga"]; ?></li>
            <li>Lokasi : <?= $rm["lokasi"]; ?></li>
            <li>Tipe Properti : <?= $rm["tipe"]; ?></li>
            <li>Ukuran : <?= $rm["ukuran"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>