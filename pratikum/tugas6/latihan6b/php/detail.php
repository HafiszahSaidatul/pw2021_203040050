<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?>

<?php
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
    <title>Home Design Lights</title>
    <link rel="stylesheet" type="text/css" href="assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
    <script type="text/javascript" src="semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>


</head>

<body>
    <h2 class="ui segment">Detail Design<?= $lampu["nama"] ?></h2>
    <div class="ui container">
        <div class="ui card">
            <div class="image">
                <img src="../assets/img/<?= $lampu["img"] ?>">
            </div>
            <div class="content">
                <a class="header"><?= $lampu["nama"] ?></a>
                <div class="meta">
                    <span class="date">Rp.<?= $lampu["harga"] ?></span>
                </div>
                <div class="description">
                    <?= $lampu["variant"] ?>
                </div>
            </div>
            <div class="extra content">
                <a>
                    <i class="paperclip icon"></i>
                    <?= $lampu["quantity"] ?>
                </a>
            </div>
        </div>
        <a href="../index.php"><button class="ui inverted olive button">Back Again</button></a>
    </div>
</body>

</html>