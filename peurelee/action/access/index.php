<?php
include "../../../action/connection.php";

    $NIK = "1106202810990003";
    $nik_md5 = md5($NIK);
    $password = "Anywhere10";
    $pass_md5 = md5($password);

    // echo "NIM : $varNim, Nama : $varNama, Jurusan : $varJurusan";
    $insert = $link->query("insert into admin (nik, password) values ('$nik_md5', '$pass_md5')");

    if ($insert) {   
        echo "<script>alert('Data Berhasil Diinput!')</script>";
    }
    else{
        echo "<script>alert('Data GAGAL Diinput!')</script>";
    }
?>

<script>
    location.replace("../../index.php");
</script>