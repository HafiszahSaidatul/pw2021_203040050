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

    if (isset($_POST['tambah'])) {
        if (tambah($_POST) > 0) {
            echo " <script>
              alert('Data Berhasil ditambahkan!');
              document.location.href = 'admin.php';
            </script>";
        } else {
            echo "<script>
    alert('Data Gagal Ditambahkan!');
    document.location.href = 'admin.php';
    </script>";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Z Lamps</title>
    <link rel="stylesheet" type="text/css" href="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
    <script type="text/javascript" src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <script src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Cinzel&family=Ultra&family=Zen+Dots&display=swap" rel="stylesheet">
</head>


<body>
    <div class="tambah">
        <form action="" method="post" enctype="multipart/form-data">
            <div style="padding: 50px;" class="ui container">
                <div style=" background-image: url(../images/bgl.jpg); border-radius: 8px;" class="ui placeholder segment">
                    <h3 class="ui left aligned header ui brown header ui large header" style="font-family: 'Alfa Slab One', cursive; text-align:center; margin:10px; left:20px;">FORM ADD LAMPS</h3>
                    <div class="ui two column very relaxed stackable grid">
                        <div style="  left: 34%;" class="ui big form">
                            <ul>
                                <label for="img">Gambar : <br><br>
                                    <input type="file" name="img" id="img" class="img" onchange="previewImage()"><br><br>
                                </label>
                                <img src="../assets/img/nophoto.png" width="120" style=" display: block;" class="img-preview">

                                <label for="nama"> Nama Lamps : </label><br><br>
                                <input type="text" name="nama" id="nama" required><br><br>

                                <label for="designer"> Designer: </label><br><br> <input type="text" name="designer" id="designer" required><br><br>

                                <label for="harga"> Harga: </label><br><br>
                                <input type="text" name="harga" id="harga" required><br><br>


                                <label for="variant"> Variant: </label><br><br>
                                <input type="text" name="variant" id="variant" required><br><br>


                                <label for="quantity"> Stok Tersedia : </label><br><br>
                                <input type="text" name="quantity" id="quantity" required><br><br>

                                <br>
                                <td>
                                    <div style="font-family: 'Zen Dots', cursive;" class="ui buttons">

                                        <button class="ui  brown button" type="submit" name="tambah" style="text-decoration: none;   color: rgb(255, 255, 171);"> <i style="color:#eee5b1; font-size:20px;" class="plus circle icon large"></i>Add Lamps</button>

                                        <button class="ui  brown button" type="button">

                                            <a href="admin.php" style="text-decoration: none;   color: rgb(255, 255, 171);"> <i style="color:#eee5b1; font-size:20px;" class="hand point right icon large"></i>Back Again</a>
                                        </button>
                                    </div>
                                </td>
                            </ul>
        </form>
    </div>
    </div>
    </div>
</body>
<script type="text/javascript">
    function previewImage() {
        const img = document.querySelector('.img');
        const imgPreview = document.querySelector('.img-preview');

        const oFReader = new FileReader();
        oFReader.readAsDataURL(img.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        };
    }
</script>

</html>