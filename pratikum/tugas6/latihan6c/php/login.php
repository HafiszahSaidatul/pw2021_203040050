<?php
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
    <title>Tambah Home Design Lights</title>
    <link rel="stylesheet" type="text/css" href="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
    <script type="text/javascript" src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <script src="../assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
</head>

<body>
    <form action="" method="post">
        <div class="ui container">
            <div class="ui form"></div>
            <div class="ui placeholder segment">
                <div class="ui two column very relaxed stackable grid">
                    <div class="column">
                        <div class="ui form">
                            <div class="field">
                                <label for="username">Username</label>
                                <div class="ui left icon input">
                                    <i class="ui green user icon"></i>
                                    <input class="ui olive basic button" type="text" name="username">
                                </div>
                            </div>
                            <div class="field">
                                <label for="password">Password</label>
                                <div class="ui left icon input">
                                    <i class="ui green lock icon"></i>
                                    <input class="ui olive basic button" type="password" name="password">
                                </div>
                            </div>
                            <div class="fields ui olive ui button ui black signup icon">
                                <input type="checkbox" name="remember">
                                <label for="remember" style="color : black;">Remember me</label>
                            </div>
                            <button class="ui olive button" type="submit" name="submit">Login</button>
                            <div class="registrasi">
                                <p style="margin: 20px !important">Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="middle aligned column">
                        <?php if (isset($error)) : ?>
                            <p class="ui big button middle aligned column" style="color : red; font-style: italic;">Username atau Password salah</p>
                        <?php endif; ?>
                        <div class="ui olive ui big button">
                            <i class="ui black signup icon"></i>
                            Sign Up
                        </div>
                    </div>
                </div>
                <div class="ui vertical divider">
                    Or
                </div>
            </div>
</body>

</html>