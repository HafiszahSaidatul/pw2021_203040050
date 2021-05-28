<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?><?php
    require 'functions.php';

    if (isset($_POST['registrasi'])) {
        if (registrasi($_POST) > 0) {
            echo "<script>
            alert('user baru berhasil ditambahkan. silahkan login!');
            document.location.href = 'login.php';
          </script>";
        } else {
            echo 'user gagal ditambahkan!';
        }
    }


    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrasi Z Lamps</title>
    <link rel="stylesheet" type="text/css" href="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
    <script type="text/javascript" src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Cinzel&family=Ultra&family=Zen+Dots&display=swap" rel="stylesheet">
    <script src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
</head>

<body>
    <form action="" method="post">
        <div style="padding: 130px;" class="ui container">
            <div class="ui form"></div>
            <div style="background-color:#aa4326; border-radius: 90px;" class="ui placeholder segment">
                <div class="ui two column very relaxed stackable grid">
                    <div class="column">
                        <div class="ui form">
                            <div class="field">
                                <label style="font-weight:900; color:black; font-size: 20px;" for="username">Username</label>
                                <div class="ui left icon input">
                                    <i style="font-size: 20px;" class="ui black user icon"></i>
                                    <input class="ui yellow basic button" type="text" name="username">
                                </div>
                            </div>
                            <div class="field">
                                <label style="font-weight:900; color:black; font-size: 20px;" for="password">Password</label>
                                <div class="ui left icon input">
                                    <i style="font-size: 20px;" class="ui black lock icon"></i>
                                    <input class="ui yellow basic button" type="password" name="password">
                                </div>
                            </div>
                            <button style="background-color:#503b2b; font-family: 'Cinzel', serif; color : white;" class=" ui grey button" type="submit" name="registrasi">REGISTRATION</button>
                        </div>
                    </div>
                    <div class="middle aligned column">
                        <?php if (isset($error)) : ?>
                            <p class="ui big button middle aligned column" style="color : red; font-style: italic;">Username atau Password salah</p>
                        <?php endif; ?>
                        <h6 style="margin:10px; font-size:15px; color:white;">Sudah Punya Akun?</h6> <i style="color:white; margin:12px;" class="ui big white hand point down icon"></i>
                        <div style=" font-family: 'Cinzel', serif; background-color:#503b2b;" class=" ui teal ui big button">
                            <i class="ui yellow signup icon"></i>
                            <a style="font-family: 'Cinzel', serif; color:white;" href="login.php"> Sign In</a>

                        </div>
                    </div>
                </div>
                <div class="ui vertical divider">
                    Or
                </div>
            </div>
</body>

</html>