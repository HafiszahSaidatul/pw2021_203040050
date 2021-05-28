<?php
/*
Hafiszah Saidatul
203040050
https://github.com/HafiszahSaidatul/pw2021_203040050
Pertemuan 11 - (30 APRIL 2021)
Materi pertemuan kali ini membuat mempelajari mengenai (Delete & Update Data) (Searching Data)
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

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);


    $query = "INSERT INTO mahasiswa
          VALUES
          (null,
          '$gambar',
          '$nrp',
          '$nama',
          '$email',
          '$jurusan')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);


    $query = "UPDATE mahasiswa SET
               gambar = 'gambar',
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan' 
                WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM mahasiswa
    WHERE
     nama LIKE '%$keyword%' OR
     nrp LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
