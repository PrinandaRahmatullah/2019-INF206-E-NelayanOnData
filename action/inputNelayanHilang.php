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
    // $No_Hp_Darurat = $_POST["no_hp_d"];
    $Tanggal = $_POST["tanggal"];
    $Waktu = $_POST["waktu"];
    $Kapal = $_POST["kapal"];

		$input = $link->query("INSERT INTO awakhilang (NIK, Nama, Tempat_Lahir, Tanggal_Lahir, Kota, Kecamatan, Desa, Alamat, Tanggal_Hilang, Waktu_Hilang, Nama_Kapal, Nomor_HP_Pelapor) VALUES ('$NIK','$Nama','$Tempat_Lahir','$Tanggal_Lahir','$Kota','$Kecamatan','$Desa','$Alamat','$Tanggal','$Waktu','$Kapal','$No_Hp')");


    if ($input) {
        // echo "<script>alert('Data Berhasil Di input!')</script>";
    }
    else{
        // echo "<script>alert('Data GAGAL Di input!')</script>";
    }
?>

<script>
    location.replace("../awakhilang.php");
</script>