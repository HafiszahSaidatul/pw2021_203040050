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

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $lampu = query("SELECT * FROM lampu WHERE
              img LIKE '%$keyword%' OR
              nama LIKE '%$keyword%' OR
              designer LIKE '%$keyword%' OR
              harga LIKE '%$keyword%' OR
              variant LIKE '%$keyword%' OR
             quantity LIKE '%$keyword%' 
              ");
} else {
    $lampu = query("SELECT * FROM lampu");
}
?>
<!DOCTYPE html>
<html lang>

<head>
    <title>Admin Home Design Lights</title>
    <link rel="stylesheet" type="text/css" href="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
    <script type="text/javascript" src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <script src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
</head>


<body>
    <div class="add">
        <form action="" method="get">
            <div class="ui sigment small stackable menu" id="small-menu" style="padding: 0 !important; margin: 0 !important;">
                <div class="ui container">
                    <div class="left menu">
                        <div class="item"><i class="microchip icon icon huge"></i>
                            <div class="item">
                                <div class="ui action input">
                                    <input type="text" name="keyword" autofocus>
                                    <select class="ui compact selection dropdown">
                                        <option value="article">Category</option>
                                        <option value="Product">Lamps</option>
                                        <option value="all">Nama</option>
                                        <option value="all">Designer</option>
                                        <option value="all">Variant</option>
                                        <option value="all">Harga</option>

                                    </select>
                                    <button class="ui button olive" type="submit" name="cari">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add" style="margin: 20px !important">
                <div class="ui container">
                    <div class="ui olive basic button">
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
                <div class="ui container">
                    <div class="ui olive basic button">
                        <a href="./tambah.php">Tambah Data Lamps</a>
                    </div>
                </div>
                <div class="table">
                    <div class="ui container ">
                        <table class="ui selectable celled table ui inverted olive table" style="margin: 10px !important">
                            <tr>
                                <th>NO.</th>
                                <th>opsi</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Designer</th>
                                <th>Harga</th>
                                <th>Variant</th>
                                <th>Quantity</th>
                            </tr>
                            </thead>
                            </tbody>
                            <?php if (empty($lampu)) : ?>
                                <tr>
                                    <td colspan="7">
                                        <h1>Data Tidak Ditemukan</h1>
                                    </td>
                                </tr>
                            <?php else : ?>
                                <?php $i = 1; ?>
                                <?php foreach ($lampu as $lamps) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td>
                                            <div class="ui buttons">
                                                <button class="ui black button"><a href="ubah.php?id=<?= $lamps['id'] ?>">Ubah</button>
                                                <button class="ui grey button"><a href="hapus.php?id=<?= $lamps['id'] ?>" onclick="return confirm('Hapus Data??')" style="text-decoration: none; color: white;">Hapus</a></button>
                                            </div>
                                        </td>

                                        <td><img src="../assets/img/<?= $lamps["img"]; ?>"></td>
                                        <td><b><?= $lamps["nama"]; ?></b></td>
                                        <td><b><?= $lamps["designer"]; ?></b></td>
                                        <td><b><?= $lamps["harga"]; ?></b></td>
                                        <td><b><?= $lamps["variant"]; ?></b></td>
                                        <td><b><?= $lamps["quantity"]; ?></b></td>

                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach ?>
                            <?php endif; ?>
</body>
</div>
</div>

</html>