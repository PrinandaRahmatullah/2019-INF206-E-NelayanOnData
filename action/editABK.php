<?php
    require_once "connection.php";

    $nik = $_POST["nik"];
    // $snik = md5($nik);
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $no_hp_d = $_POST["no_hp_darurat"];
    $tempat = $_POST["tempat"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $kota = $_POST["kota"];
    $kecamatan = $_POST["kecamatan"];
    $desa = $_POST["desa"];
    $alamat = $_POST["alamat"];
    
    
        $ubah = $link->query("update awakkapal set Nama='$nama', Tempat_Lahir='$tempat', Tanggal_Lahir='$tgl_lahir', Kota='$kota', Kecamatan='$kecamatan', Desa='$desa', Alamat='$alamat', No_HP='$no_hp', No_HP_Darurat='$no_hp_d' where NIK='$nik'");

    if ($ubah) {
        echo "<script>alert('SUccess')</script>";
        header("Location: ../awak.php");
    }
    else{
        echo "<script>alert('Data GAGAL Diubah!')</script>";
        header("Location: ../Awak.php");
    }

?>
