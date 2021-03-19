<?php
/*
Hafiszah Saidatul
203040050
https://github.com/HafiszahSaidatul/pw2021_203040050
Pertemuan 7 - (19 Maret 2021)
Mempelajari mengenai Metode GET AND POST
*/
?>
<!DOCTYPE html>
<html>

<head>
    <title>POST</title>
</head>

<body>

    <?php if (isset($_POST["submit"])) : ?>
        <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>

    <form action="" method="post">
        Masukkan Nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>

</body>

</html>