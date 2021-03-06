<?php
/*
Hafiszah Saidatul
203040050
https://github.com/HafiszahSaidatul/pw2021_203040050
Pertemuan 5 - (5 Maret 2021)
Mempelajari mengenai Array
*/
?>


<?php
//array
//array adalah sebuah variable yang dapat memiliki banyak
// element pada array boleh memiliki tipe data yang berbeda 
// definisi array adalah pasangan antara key dan value
// keynya adalah index,yang dimulai dari 0 

// membuat array
// cara lama membuat array
$hari = array("Senin", "Selasa", "Rabu");

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "Tulisan", false];

// menampilkan array
// var_dump() / print_r()

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// // menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);

?>