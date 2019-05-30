<?php
include "../../action/connection.php";
$nik = $_POST["nik"];
$nama = $_POST["nama"];
$no_hp = $_POST["no_hp"];
$no_hp_d = $_POST["no_hp_d"];
$tempat = $_POST["tempat_lahir"];
$tgl_lahir = $_POST["tanggal_lahir"];
$kota = $_POST["kota"];
$kecamatan = $_POST["kecamatan"];
$desa = $_POST["desa"];
$alamat = $_POST["alamat"];
$password2 = $_POST["password2"];
$password3 = $_POST["password3"];

    // echo "NIM : $varNim, Nama : $varNama, Jurusan : $varJurusan";
    $insert = $link->query("insert into nahkoda (nik, nama, Tempat_Lahir, Tanggal_Lahir, Kota, Kecamatan, Desa, Alamat, No_HP, no_HP_Darurat, password) 
                            values ('$nik', '$nama', '$tempat','$tgl_lahir','$kota','$kecamatan','$desa','$alamat','$no_hp','$no_hp_d','$password2')");

    if ($insert) {
        echo "<script>alert('Data SUCCESS Diinput!')</script>";
    }
    else{
        echo "<script>alert('Data GAGAL Diinput!')</script>";
    }
?>

<script>
    location.replace("../adminNahkoda.php");
</script>