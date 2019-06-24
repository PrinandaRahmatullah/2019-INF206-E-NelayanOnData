<?php
    require_once "../../action/connection.php";
    // if(isset('#save')){
        
    // }
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $no_hp_d = $_POST["no_hp_darurat"];
    $tempat = $_POST["tempat"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $kota = $_POST["kota"];
    $kecamatan = $_POST["kecamatan"];
    $desa = $_POST["desa"];
    $alamat = $_POST["alamat"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $password3 = $_POST["password3"];
    
    
    if($password2 && $password3){
        $ubah = $link->query("update nahkoda set nama='$nama', Tempat_Lahir='$tempat', Tanggal_Lahir='$tgl_lahir', Kota='$kota', Kecamatan='$kecamatan', Desa='$desa', Alamat='$alamat', No_HP='$no_hp', No_HP_Darurat='$no_hp_d', password='$password3' where nik='$nik'");
    }else{
        $ubah = $link->query("update nahkoda set nama='$nama', Tempat_Lahir='$tempat', Tanggal_Lahir='$tgl_lahir', Kota='$kota', Kecamatan='$kecamatan', Desa='$desa', Alamat='$alamat', No_HP='$no_hp', No_HP_Darurat='$no_hp_d', password='$password' where nik='$nik'");
    }

    if ($ubah) {
        header("Location: ../editNahkoda.php?nik=$nik");
    }
    else{
        header("Location: ../editNahkoda.php?nik=$nik");
    }

?>
