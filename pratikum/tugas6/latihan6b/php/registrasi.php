<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
            <?script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
                </script>";
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
                                    <input class="ui teal basic button" type="text" name="username">
                                </div>
                            </div>
                            <div class="field">
                                <label for="password">Password</label>
                                <div class="ui left icon input">
                                    <i class="ui green lock icon"></i>
                                    <input class="ui teal basic button" type="password" name="password">
                                </div>
                            </div>
                            <button class="ui teal button" type="submit" name="register">REGISTER</button>
                            <!-- <div type="submit" name="submit" class="ui blue submit button">Login</div> -->
                        </div>
                    </div>
                    <div class="middle aligned column">
                        <?php if (isset($error)) : ?>
                            <p class="ui big button middle aligned column" style="color : red; font-style: italic;">Username atau Password salah</p>
                        <?php endif; ?>
                        <div class="ui teal ui big button">
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