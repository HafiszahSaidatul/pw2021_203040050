<?php
/*
Hafiszah Saidatul
203040050
https://github.com/HafiszahSaidatul/pw2021_203040050
Pertemuan 12 - (7 MEI 2021)
Materi pertemuan kali ini membuat mempelajari mengenai (login dan registrasi)
*/
?>

<?php
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
    <title>Registrasi</title>
</head>

<body>
    <h3>Form Registrasi</h3>

    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    Username :
                    <input type="text" name="username" autofocus autocomplete="off" required>
                </label>
            </li>
            <li>
                <label>
                    Password :
                    <input type="password" name="password1" required>
                </label>
            </li>
            <li>
                <label>
                    Konfirmasi Password :
                    <input type="password" name="password2" required>
                </label>
            </li>
            <li>
                <button type="submit" name="registrasi">Registrasi</button>
            </li>
        </ul>
    </form>
</body>

</html>