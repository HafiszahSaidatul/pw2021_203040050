<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?><?php
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

    function upload()
    {
        $nama_file = $_FILES['img']['name'];
        $tipe_file = $_FILES['img']['type'];
        $ukuran_file = $_FILES['img']['size'];
        $error = $_FILES['img']['error'];
        $tmp_file = $_FILES['img']['tmp_name'];



        // ketika tidak ada gambar yang dipilih
        if ($error == 4) {
            // echo "<script> 
            // alert('pilih gambar terlebih dahulu!');
            // </script>";
            return 'nophoto.png';
        }

        // cek ekstensi file
        $daftar_gambar = ['jpg', 'png', 'jpeg', 'jfif'];
        $ekstensi_file = explode('.', $nama_file);
        $ekstensi_file = strtolower(end($ekstensi_file));

        if (!in_array($ekstensi_file, $daftar_gambar)) {
            echo "<script> 
    alert('yang anda pilih bukan gambar');
    </script>";
            return false;
        }

        // cek type file
        if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
            echo "<script> 
            alert('Yang Anda Pilih Bukan Gambar');
          </script>";
            return false;
        }
        // cek ukuran file
        // maksimal 5Mb == 5000000
        if ($ukuran_file > 5000000) {
            echo "<script> 
            alert('File gambar terlalu besar');
          </script>";
            return false;
        }
        //lolos pengecekan
        // siap upload file
        // generate nama file baru
        $nama_file_baru = uniqid();
        $nama_file_baru .= '.';
        $nama_file_baru .= $ekstensi_file;

        move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

        return $nama_file_baru;
    }



    //fungsi untuk menambahkan  data didalam database
    function tambah($data)
    {
        $conn = koneksi();

        // $img = htmlspecialchars($data['img']);
        $nama = htmlspecialchars($data['nama']);
        $room = htmlspecialchars($data['room']);
        $foto = htmlspecialchars($data['foto']);
        $designer = htmlspecialchars($data['designer']);
        $harga = htmlspecialchars($data['harga']);
        $variant = htmlspecialchars($data['variant']);
        $quantity = htmlspecialchars($data['quantity']);

        // upload gambar
        $img = upload();
        if (!$img) {
            return false;
        }
        $query = "INSERT INTO `lampu`(`id`, `img`, `nama`, `designer`, `harga`, `variant`, `quantity`,`room`,`foto`) VALUES (NULL, '$img', '$nama', '$designer', '$harga', '$variant', '$quantity','$room','$foto')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    function hapus($id)
    {

        $conn = koneksi();

        $lamps = query("SELECT * FROM lampu WHERE id = $id")[0];

        if ($lamps['img'] != 'nophoto.png') {
            unlink('../assets/img/' . $lamps['img']);
        }
        mysqli_query($conn, "DELETE FROM `lampu` WHERE id = $id") or die(mysqli_error($conn));

        return mysqli_affected_rows($conn);
    }
    function cari($keyword)
    {
        $conn = koneksi();

        $query = "SELECT * FROM lampu
              WHERE 
            room LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
          ";

        $result = mysqli_query($conn, $query);

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }
    function ubah($data)
    {
        $conn = koneksi();

        $id = $data['id'];
        $gambar_lama = htmlspecialchars($data['gambar_lama']);
        $nama = htmlspecialchars($data['nama']);
        $designer = htmlspecialchars($data['designer']);
        $harga = htmlspecialchars($data['harga']);
        $variant = htmlspecialchars($data['variant']);
        $quantity = htmlspecialchars($data['quantity']);

        $img = upload();
        if (!$img) {
            return false;
        }

        if ($img == 'nophoto.png') {
            $img = $gambar_lama;
        }

        $query = "UPDATE lampu
     SET 
     img = '$img',
     nama = '$nama',
     designer = '$designer',
     harga = '$harga',
     variant = '$variant',
     quantity = '$quantity'
     WHERE id = $id
     ";


        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    function registrasi($data)
    {
        $conn = koneksi();
        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);

        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                alert('username sudah digunakan');
            </script>";
            return false;
        }
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query_tambah = "INSERT INTO user VALUES(NULL,'$username','$password')";
        mysqli_query($conn, $query_tambah);

        return mysqli_affected_rows($conn);
    }
    ?>