<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?><?php
    session_start();
    require 'functions.php';
    if (isset($_SESSION['username'])) {
        header("Location: admin.php");
        exit;
    }
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

        if (mysqli_num_rows($cek_user) > 0) {
            $row = mysqli_fetch_assoc($cek_user);
            if (password_verify($password, $row['password'])) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['hash'] = hash('sha256', $row['id'], false);
            }
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }
            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
        $error = true;
    }

    if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
        $username = $_COOKIE['username'];
        $hash = $_COOKIE['hash'];

        $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
        $row = mysqli_fetch_assoc($result);

        if ($hash === hash('sha256', $row['id'], false)) {
            $_SESSION['username'] = $row['username'];
            header("Location: admin.php");
            exit;
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Z Lamps</title>
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
            <div style="background-color:#bc9651; border-radius: 90px;" class="ui placeholder segment">
                <div class="ui two column very relaxed stackable grid">
                    <div class="column">
                        <div class="ui form">
                            <div class="field">
                                <label style="font-weight:900; color:black; font-size: 20px;" for="username">Username</label>
                                <div class="ui left icon input">
                                    <i class="ui black user icon"></i>
                                    <input class="ui brown basic button" type="text" name="username">
                                </div>
                            </div>
                            <div class="field">
                                <label style="font-weight:900; color:black; font-size: 20px;" for="password">Password</label>
                                <div class="ui left icon input">
                                    <i class="ui black lock icon"></i>
                                    <input class="ui brown basic button" type="password" name="password">
                                </div>
                            </div>
                            <div class=" fields ui button ui black signup icon">
                                <input type="checkbox" name="remember">
                                <label for="remember" style="font-family: 'Zen Dots', cursive; color : white;">remember me</label>
                            </div>
                            <button style="font-family: 'Zen Dots', cursive; color:white;" class="ui black button" type="submit" name="submit">Login</button>
                            <div class="registrasi">
                            </div>
                        </div>
                    </div>
                    <div class="middle aligned column">
                        <?php if (isset($error)) : ?>
                            <p class="ui big button middle aligned column" style="font-size:15px; color : #cc4e26; font-style: italic;">your password is incorrect</p>
                        <?php endif; ?>
                        <h6 style="margin:5px; font-size:15px; color:black;">Belum Punya Akun?</h6> <i style="color:black; margin:12px;" class="ui big white hand point down icon"></i>
                        <div class="ui black ui big button">
                            <i class="ui white signup icon"></i>
                            <a style=" font-family: 'Zen Dots', cursive; color:darkgray;" href="registrasi.php"> Sign Up</a>

                        </div>
                    </div>
                </div>
                <div class="ui vertical divider">
                    Or
                </div>
            </div>
        </div>
</body>

</html>