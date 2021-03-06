<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan1b_203040050</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>


        </tr>

        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <th>Baris <?= $i; ?></th>
                <?php for ($f = 1; $f <= 5; $f++) : ?>
                    <td>Baris <?= $i ?>, Kolom <?= $f; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <!-- 203040050 -->
</body>

</html>