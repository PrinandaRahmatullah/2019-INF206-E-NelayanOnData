<?php
require_once "../../action/connection.php";

    $nik = filter_input(INPUT_POST, 'nik', FILTER_SANITIZE_STRING);
    $nik_md5 = md5($nik);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $pass_md5 = md5($password);

    $query = $link->query ("SELECT * FROM admin WHERE nik='$nik_md5' and password='$pass_md5'");

    if($query->num_rows>0){
        session_start();
        $_SESSION["adminNik"]=$nik;
        header("Location: ../home.php");

    }
    else{
        echo "<script>alert('NIK atau Password Salah!');location.replace('../index.php');</script>";
    }

?>