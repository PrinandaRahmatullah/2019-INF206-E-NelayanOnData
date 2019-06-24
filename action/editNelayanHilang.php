<?php
    require_once "connection.php";

    $nik = $_POST["nik"];
    // $snik = md5($nik);
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $tempat = $_POST["tempat"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $kota = $_POST["kota"];
    $kecamatan = $_POST["kecamatan"];
    $desa = $_POST["desa"];
    $alamat = $_POST["alamat"];
    $tgl_hilang = $_POST["tanggal_hilang"];
    $waktu_hilang = $_POST["waktu_hilang"];
    $kapal = $_POST["kapal_hilang"];
    
    
        $ubah = $link->query("update awakhilang set NIK='$nik', Tempat_Lahir='$tempat', Tanggal_Lahir='$tgl_lahir', Kota='$kota', Kecamatan='$kecamatan', Desa='$desa', Alamat='$alamat', Nomor_HP_Pelapor='$no_hp', Tanggal_Hilang='$tgl_hilang', Waktu_Hilang='$waktu_hilang', Nama_Kapal='$kapal' where Nama='$nama'");

    if ($ubah) {
        header("Location: ../awakhilang.php");
    }
    else{
        header("Location: ../awakhilang.php");
    }

?>
