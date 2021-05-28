<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?><?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require('functions.php');

    $id = $_GET['id'];

    $lampu = query("SELECT * FROM lampu WHERE id = $id")[0];
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail Z Lamps</title>
    <link rel="stylesheet" type="text/css" href="assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
    <script type="text/javascript" src="semantic.min.js"></script>
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Cinzel&family=Ultra&family=Zen+Dots&display=swap" rel="stylesheet">

</head>

<body style="background-color:black;">

    <h2 style="padding: 10px; background-color:black; color:#c9bfb5; text-align:center; font-family: 'Zen Dots', cursive; font-size:24px;" class="ui segment">Detail Design <?= $lampu["room"] ?></h2>
    <div style="text-align:center;" class="ui container">
        <div style="text-align:center; background-color:#aa4326;" class="ui centered card ui card">
            <div class="image">
                <img src="../assets/foto/<?= $lampu["foto"] ?>">
            </div>
            <div class="content">
                <div style="color:#978778s; font-family: 'Alfa Slab One', cursive; font-size:20px;" class="header"><?= $lampu["nama"] ?></div>
                <p style="font-family: 'Cinzel', serif; color:yellowgreen;">semua bergaransi 1 tahun</p>
                <div class="meta">
                    <span style="color:#d5ccbd;font-family: 'Zen Dots', cursive; font-size:15px;" class="date"><?= $lampu["quantity"] ?></span>
                </div>
                <div style="color:#bab09c;font-family: 'Zen Dots', cursive; font-size:15px;" class="description">
                    <?= $lampu["variant"] ?>
                </div>
            </div>
            <div style="color:white;font-family: 'Zen Dots', cursive; font-size:15px;" class="extra content">
                <div>
                    <i class="paperclip icon"></i>
                    <?= $lampu["harga"] ?>
                </div>
            </div>
        </div>
        <a href="../index.php"><button style="font-family: 'Zen Dots', cursive; color: #aa4326;" class="ui inverted  button">Back Again</button></a>
    </div>
</body>

</html>