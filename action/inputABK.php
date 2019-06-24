<?php
  require_once "connection.php";


    $NIK = $_POST["nik"];
    $Nama = $_POST["nama"];
    $Tempat_Lahir = $_POST["tempat_lahir"];
    $Tanggal_Lahir = $_POST["tanggal_lahir"];
    $Kota = $_POST["kota"];
    $Kecamatan = $_POST["kecamatan"];
    $Desa = $_POST["desa"];
    $Alamat = $_POST["alamat"];
    $No_Hp = $_POST["no_hp"];
    $No_Hp_Darurat = $_POST["no_hp_d"];

		$input = $link->query("INSERT INTO awakkapal (NIK,Nama,Tempat_Lahir,Tanggal_Lahir,Kota,Kecamatan,Desa,Alamat,No_Hp,No_Hp_Darurat) VALUES ('$NIK','$Nama','$Tempat_Lahir','$Tanggal_Lahir','$Kota','$Kecamatan','$Desa','$Alamat','$No_Hp','$No_Hp_Darurat')");


    if ($input) {
        echo "<script>alert('Data Berhasil Di input!')</script>";
    }
    else{
        echo "<script>alert('Data GAGAL Di input!')</script>";
    }
?>

<script>
    location.replace("../awak.php");
</script>