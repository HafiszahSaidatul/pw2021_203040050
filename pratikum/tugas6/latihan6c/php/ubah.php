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

$id = $_GET['id'];
$lamps = query("SELECT * FROM lampu WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo " <script>
              alert('Data Berhasil DiUbah!');
              document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
    alert('Data Gagal DiUbah!');
    document.location.href = 'admin.php';
    </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ubah Home Design Lights</title>
    <link rel="stylesheet" type="text/css" href="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
    <script type="text/javascript" src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <script src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
    <style>
        body {
            background-color: #455e14;
            font-family: 'Bungee', cursive;
            color: #dbeac6;
            font-size: 15px;
        }
    </style>
</head>


<body>
    <div class="ubah">
        <div class="ui form">
            <div class="fields">
                <div style="margin: 20px !important">Form Tambah Data</div>
                <form action="" method="post">

                    <input type="hidden" name="id" value="<?= $lamps['id']; ?>">
                    <ul>
                        <li>
                            <label for="img"> Gambar : </label><br>
                            <input type="text" name="img" id="img" required value="<?= $lamps['img']; ?>"><br><br>
                        </li>
                        <li>
                            <label for="nama"> Nama Lamps : </label><br>
                            <input type="text" name="nama" id="nama" required value="<?= $lamps['nama']; ?>"><br><br>
                        </li>
                        <li>
                            <label for="designer"> Designer: </label><br>
                            <input type="text" name="designer" id="designer" required value="<?= $lamps['designer']; ?>"><br><br>
                        </li>
                        <li>
                            <label for="harga"> Harga: </label><br>
                            <input type="text" name="harga" id="harga" required value="<?= $lamps['harga']; ?>"><br><br>
                        </li>
                        <li>
                            <label for="variant"> Variant: </label><br>
                            <input type="text" name="variant" id="variant" required value="<?= $lamps['variant']; ?>"><br><br>
                        </li>
                        <li>
                            <label for="quantity"> Stok Tersedia : </label><br>
                            <input type="text" name="quantity" id="quantity" required value="<?= $lamps['quantity']; ?>"><br><br>
                        </li>
                        <br>
                        <button class="ui inverted olive button" type="submit" name="ubah" style="text-decoration: none; color: black;">Ubah Data</button>
                        <button class="ui inverted olive button" type="submit">
                            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
                        </button>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</body>

</html>