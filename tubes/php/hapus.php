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
  $id = $_GET['id'];

  if (hapus($id) > 0) {
    echo "<script>
            alert('Data Berhasil dihapus!');
            document.location.href='admin.php';
          </script>";
  } else {
    echo "<script>
    alert('Data Gagal dihapus!');
    document.location.href='admin.php';
  </script>";
  }
