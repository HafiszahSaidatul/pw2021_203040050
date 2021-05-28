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

function koneksi()
{
    return mysqli_connect('localhost', 'pw20050', '#Akun#203040050#', 'pw20050_pw_203040050');
}
function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    // jika hasilnya 1 data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function tambah
function tambah($data)
{
    $conn = koneksi();


    $nama = htmlspecialchars($data['nama']);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO
                mahasiswa
            VALUES
            (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar');
          ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
