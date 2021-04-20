<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?>

<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo " <script>
              alert('Data Berhasil ditambahkan!');
              document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
    alert('Data Gagal Ditambahkan!');
    document.location.href = 'admin.php';
    </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Home Design Lights</title>
    <link rel="stylesheet" type="text/css" href="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
    <script type="text/javascript" src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <script src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
</head>


<body>
    <div class="tambah">
        <h3 class="ui left aligned header ui olive header ui large header" style="margin: 20px !important">Form Tambah Data</h3>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="img"> Gambar : </label><br>
                    <input type="text" name="img" id="img" required><br><br>
                </li>
                <li>
                    <label for="nama"> Nama Lamps : </label><br>
                    <input type="text" name="nama" id="nama" required><br><br>
                </li>
                <li>
                    <label for="designer"> Designer: </label><br>
                    <input type="text" name="designer" id="designer" required><br><br>
                </li>
                <li>
                    <label for="harga"> Harga: </label><br>
                    <input type="text" name="harga" id="harga" required><br><br>
                </li>
                <li>
                    <label for="variant"> Variant: </label><br>
                    <input type="text" name="variant" id="variant" required><br><br>
                </li>
                <li>
                    <label for="quantity"> Stok Tersedia : </label><br>
                    <input type="text" name="quantity" id="quantity" required><br><br>
                </li>
                <br>
                <button class="ui inverted olive button" type="submit" name="tambah" style="text-decoration: none; color: black;">Tambah Data</button>
                <button class="ui inverted olive button" type="submit">
                    <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
                </button>
            </ul>
        </form>
    </div>
</body>

</html>