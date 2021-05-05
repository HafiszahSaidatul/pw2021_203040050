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
session_start();
session_destroy();
header("Location: login.php");
exit;
