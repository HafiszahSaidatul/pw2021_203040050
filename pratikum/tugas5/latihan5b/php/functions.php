<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?>

<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "pw20050", "#Akun#203040050#");
    mysqli_select_db($conn, "pw20050_pw_tubes_203040050");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
//fungsi untuk menambahkan  data didalam database
function tambah($data)
{
    $conn = koneksi();

    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $designer = htmlspecialchars($data['designer']);
    $harga = htmlspecialchars($data['harga']);
    $variant = htmlspecialchars($data['variant']);
    $quantity = htmlspecialchars($data['quantity']);
    $foto = htmlspecialchars($data['foto']);
    $room = htmlspecialchars($data['room']);

    $query = "INSERT INTO `lampu`(`id`, `img`, `nama`, `designer`, `harga`, `variant`, `quantity`,`foto`,`room`) VALUES (NUll, '$img', '$nama', '$designer', '$harga', '$variant', '$quantity','$foto','$room')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>