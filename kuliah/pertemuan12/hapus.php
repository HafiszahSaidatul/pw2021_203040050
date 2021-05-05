<?php
/*
Hafiszah Saidatul
203040050
https://github.com/HafiszahSaidatul/pw2021_203040050
Pertemuan 12 - (7 MEI 2021)
Materi pertemuan kali ini membuat mempelajari mengenai (login dan registrasi)
*/
?>
<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
//jika tidak ada id di url
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}
$id = $_GET['id'];


if (hapus($id) > 0) {
    echo "<script>
        alert('data berhasil di hapus');
        document.location.href = 'index.php';
            </script>";
} else {
    echo "data gagal ditambahkan!";
}
