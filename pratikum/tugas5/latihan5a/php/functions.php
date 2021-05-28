
<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "pw20050", "#Akun#203040050#");
    mysqli_select_db($conn, "pw20050_pw_tubes_203040050");

    return $conn;
}
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>