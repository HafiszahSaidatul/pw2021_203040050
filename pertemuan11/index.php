<?php
/*
Hafiszah Saidatul
203040050
https://github.com/HafiszahSaidatul/pw2021_203040050
Pertemuan 11 - (30 APRIL 2021)
Materi pertemuan kali ini membuat mempelajari mengenai (Delete & Update Data) (Searching Data)
*/
?>

<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
    $mahasiswa = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian...." autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>
    <table border="1" cellpading="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>gambar</th>
            <th>nama</th>
            <th>aksi</th>
        </tr>

        <?php if (empty($mahasiswa)) : ?>
            <tr>
                <td colspan="4">
                    <p style="color:red; font-style:italic;">DATA MAHASISWA TIDAK DITEMUKAN!!</p>
                </td>
            </tr>
        <?php endif ?>

        <?php $i = 1;
        foreach ($mahasiswa as $m) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="img/<?= $m["gambar"]; ?>  " width="100"></td>
                <td><?= $m["nama"]; ?></td>
                <td>
                    <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>