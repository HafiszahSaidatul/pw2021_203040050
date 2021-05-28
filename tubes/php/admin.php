<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?><?php
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
    <title>Admin Z Lamps</title>
    <link rel="stylesheet" type="text/css" href="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
    <script type="text/javascript" src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <script src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Cinzel&family=Ultra&family=Zen+Dots&display=swap" rel="stylesheet">

</head>


<body style="font-family: 'Zen Dots', cursive; font-size:15px;">
    <div class="add">
        <form action="" method="get">
            <div class="ui sigment small stackable menu" id="small-menu" style="padding: 0 !important; margin: 0 !important;background-image: url(../images/bg3.jpg);">

                <div class="ui container">
                    <div class="left menu">
                        <div class="item"><i class="ui brown microchip icon icon huge"></i>
                            <div class="item">
                                <div class="ui action input">
                                    <input type="text" name="keyword" autofocus>
                                    <select class="ui brown compact selection dropdown">
                                        <option value="article">Category</option>
                                        <option value="Product">Lamps</option>
                                        <option value="all">Nama</option>
                                        <option value="all">Designer</option>
                                        <option value="all">Variant</option>
                                        <option value="all">Harga</option>
                                    </select>
                                    <button class="ui button brown" type="submit" name="cari">Search</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <button style="display: flex; justify-content: space-between; align-items: center;margin: 30px 15px; font-family: 'Zen Dots', cursive;" class="ui brown right floated button">
                    <i style="color:#eee5b1; font-size:30px;" class="plus circle icon large"></i>
                    <a style=" color:#d8c58d; font-size:20px;" href="./tambah.php">Add Lamps</a>
                </button>
                <button style="  display: flex; justify-content: space-between; align-items: center;margin: 30px 30px; font-family: 'Zen Dots', cursive;" class="ui brown right floated button">
                    <i style="color:#e2c85b; font-size:30px;" class="sign-out icon large"></i>
                    <a style="color:#f1b963; font-size:20px;" href="logout.php">Logout</a>
                </button>
            </div>
    </div>
    <div class="table">
        <div class="ui container ">
            <table class="ui selectable celled table ui brown inverted table" style="margin: 8px 1px;">
                <tr style="text-align: center; font-size:18px;">
                    <th>NO.</th>
                    <th>Opsi</th>
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
                            <h1 style="text-align: center;">Data Tidak Dikenal</h1>
                        </td>
                    </tr>
                <?php else : ?>
                    <?php $i = 1; ?>
                    <?php foreach ($lampu as $lamps) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                <div style="font-family: 'Zen Dots', cursive;" class="ui buttons">
                                    <button style="background-color:#e5ab84; font-family: 'Zen Dots', cursive;" class="ui button"><a href="ubah.php?id=<?= $lamps['id'] ?> " style="color:black;">CHANGE</button>
                                    <button style=" background-color:#c3a288; font-family: 'Zen Dots' , cursive;" class="ui button"><a href="hapus.php?id=<?= $lamps['id'] ?>" onclick="return confirm('Hapus Data??')" style="text-decoration: none; color:crimson;">DELETE</a></button>
                                </div>
                            </td>

                            <td><img src="../assets/img/<?= $lamps["img"]; ?>" width="250px" height="400px"></td>
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