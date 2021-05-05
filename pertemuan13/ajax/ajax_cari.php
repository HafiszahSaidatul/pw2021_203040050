<?php
/*
Hafiszah Saidatul
203040050
https://github.com/HafiszahSaidatul/pw2021_203040050
Pertemuan 13 - (14 MEI 2021)
Materi pertemuan kali ini membuat mempelajari mengenai (Ajax Live Search & Upload Gambar)
*/
?>

<?php
require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>

    <?php if (empty($mahasiswa)) : ?>
        <tr>
            <td colspan="4">
                <p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
            </td>
        </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
            <td><?= $m['nama']; ?></td>
            <td>
                <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>