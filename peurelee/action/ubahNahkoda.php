<?php
    require_once "../../action/connection.php";
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
    $password = $_POST["password4"];
    $password2 = $_POST["password5"];
    $password3 = $_POST["password6"];
    
    
    if($password2 && $password3){
        $ubah = $link->query("update nahkoda set nama='$nama', Tempat_Lahir='$tempat', Tanggal_Lahir='$tgl_lahir', Kota='$kota', Kecamatan='$kecamatan', Desa='$desa', Alamat='$alamat', No_HP='$no_hp', No_HP_Darurat='$no_hp_d', password='$password3' where nik='$nik'");
    }else{
        $ubah = $link->query("update nahkoda set nama='$nama', Tempat_Lahir='$tempat', Tanggal_Lahir='$tgl_lahir', Kota='$kota', Kecamatan='$kecamatan', Desa='$desa', Alamat='$alamat', No_HP='$no_hp', No_HP_Darurat='$no_hp_d', password='$password' where nik='$nik'");
    }

    if ($ubah) {
        echo "<script>alert('SUccess')</script>";
        header("Location: ../adminNahkoda.php");
    }
    else{
        echo "<script>alert('Data GAGAL Diubah!')</script>";
        header("Location: ../adminNahkoda.php");
    }

?>
