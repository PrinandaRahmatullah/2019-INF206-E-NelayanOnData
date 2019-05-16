<?php
require_once "connection.php";

    $nik = filter_input(INPUT_POST, 'nik', FILTER_SANITIZE_STRING);
    $nik_md5 = md5($nik);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $pass_md5 = md5($password);

    $query = $link->query ("SELECT * FROM nahkoda WHERE nik='$nik_md5' and password='$pass_md5'");
    $hasil = $query->fetch_assoc();

    if($query->num_rows > 0){
        session_start();
        $_SESSION["nik"]=$nik;
        $_SESSION["nama"]=$hasil['nama'];
        header("Location: ../index.php");
    }
    else{
        echo "<script>alert('NIK atau Password Salah!');location.replace('../login.php');</script>";
    }
?>