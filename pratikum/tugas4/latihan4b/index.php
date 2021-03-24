<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?>

<?php
require 'php/functions.php';
$lampu = query("SELECT * FROM lampu");

?>
<!DOCTYPE html>
<html lang>

<head>
    <title>Home Design Lights</title>
    <link rel="stylesheet" type="text/css" href="assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
    <script type="text/javascript" src="semantic.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <script src="assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
</head>


<body>
    <div class="ui sigment small stackable menu" id="small-menu" style="padding: 0 !important; margin: 0 !important;">
        <div class="ui container">
            <div class="left menu">
                <div class="item"><i class="microchip icon icon huge"></i>
                    <div class="item">
                        <div class="ui action input">
                            <input type="text" placeholder="Search....">
                            <select class="ui compact selection dropdown">
                                <option value="article">Category</option>
                                <option value="Product">Lamps</option>
                                <option value="all">Nama</option>
                                <option value="all">Designer</option>
                                <option value="all">Variant</option>
                                <option value="all">Harga</option>

                            </select>
                            <button class="ui button olive">Search</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="table">
        <div class="ui container ">
            <table class="ui selectable celled table ui inverted olive table">
                <tr>
                    <th>NO.</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Designer</th>
                    <th>Harga</th>
                    <th>Variant</th>
                    <th>Quantity</th>
                </tr>
                </thead>
                </tbody>
                <?php $i = 1; ?>
                <?php foreach ($lampu as $lamps) : ?>
                    <tr>
                        <td><b><?= $i ?> </b></td>
                        <td><img src="assets/img/<?= $lamps["img"]; ?>"></td>
                        <td><b><?= $lamps["nama"]; ?></b></td>
                        <td><b><?= $lamps["designer"]; ?></b></td>
                        <td><b><?= $lamps["harga"]; ?></b></td>
                        <td><b><?= $lamps["variant"]; ?></b></td>
                        <td><b><?= $lamps["quantity"]; ?></b></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach ?>
</body>
</div>
</div>

</html>