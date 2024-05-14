<?php
require 'config.php';

if (isset($_POST['username'])) {
    $error = array();

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hak_level = $_POST['hak_level'];

    if (empty($nama)) {
        $error[] = "Nama Tidak Boleh Kosong";
    }

    if (empty($username)) {
        $error[] = "username Tidak Boleh Kosong";
    }

    if (empty($password)) {
        $error[] = "password Tidak Boleh Kosong";
    }

    if (count ($error) == 0 ) {

        $password = md5($password);

        $sql = "INSERT INTO users (nama, username, password, hak_akses) 
        VALUES ('$nama', '$username', '$password', 'user')";

        $insert = $koneksi->query($sql);
        if ($insert) {
            echo "<script>alert('Registrasi Berhasil'); window.location.href = 'login.php';</script>";
            exit();
        } else {
            echo "Silahkan Coba Lagi";
        }

        

    } else{
        session_start();
        $_SESSION['error-log'] = $error;
        header ('location:register.php?error=register');
    }

} else {
    header('location:register.php');
}