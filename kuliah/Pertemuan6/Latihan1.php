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
// Review Array
// Membuat Array
// Membuat Array Dengan Cara Lama
$hari = array("Senin", "Selasa", "Rabu");
// Versi Baru
$bulan = ["Januari", "Februari", "Maret"];
// Tipe Data Yang Berbeda-beda
$arr = [100, "teks", true];


//Menampilkan Array
//Menggunakan Versi Debungging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";


// Menampilkan 1 Elemen Pada Array
echo $arr[0];
echo "<br>";


// Menampilkan array bisa menggunakan pengulangan (for / foreach}
foreach ($hari as $h) {
    echo "$h <br>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: #bada55;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <?php
    // Membagi array-array lagi,didalam array angka ada array lagi.
    $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>
    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><?= $b; ?> </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>






</body>

</html>