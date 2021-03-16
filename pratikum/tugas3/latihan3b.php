<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?>

<?php
$namapemain = [
    "Mohammad Salah",
    "Critiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Latihan3b_203040050</title>
</head>

<body>
    <p><b>Daftar pemain bola terkenal</b></p>
    <ol>
        <?php
        foreach ($namapemain as $np) {
            echo "<li>$np</li>";
        }
        ?>
    </ol>

    <?php
    $namapemain[] = "Luca Modric";
    $namapemain[] = "Sadio Mane";
    sort($namapemain);
    ?>
    <p><b>Daftar pemain bola terkenal baru</b></p>
    <ol>
        <?php
        foreach ($namapemain as $np) {
            echo "<li>$np</li>";
        }
        ?>
    </ol>
</body>

<!-- 203040050 -->

</html>