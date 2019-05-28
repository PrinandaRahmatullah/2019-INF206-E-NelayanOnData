<?php
    require_once "connection.php";
    // if(isset('#save')){
        
    // }
    session_start();
    $nik = $_SESSION["nik"];
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
    $password = $_SESSION["password"];
    // $pass = md5($password);
    $password2 = $_POST["password2"];
    // $pass2 = md5($password2);
    $password3 = $_POST["password3"];
    // $pass3 = md5($password3);
    
    
    if($password2 && $password3){
        $ubah = $link->query("update nahkoda set nama='$nama', Tempat_Lahir='$tempat', Tanggal_Lahir='$tgl_lahir', Kota='$kota', Kecamatan='$kecamatan', Desa='$desa', Alamat='$alamat', No_HP='$no_hp', No_HP_Darurat='$no_hp_d', password='$password3' where nik='$nik'");
    }else{
        $ubah = $link->query("update nahkoda set nama='$nama', Tempat_Lahir='$tempat', Tanggal_Lahir='$tgl_lahir', Kota='$kota', Kecamatan='$kecamatan', Desa='$desa', Alamat='$alamat', No_HP='$no_hp', No_HP_Darurat='$no_hp_d', password='$password' where nik='$nik'");
    }

    if ($ubah) {
        session_start();
        $_SESSION["nama"]=$nama;
        $_SESSION["nik"]=$nik;
        if($password2 && $password3){
            $_SESSION["password"]=$password2;
        }
        else{
            $_SESSION["password"]=$password;
        }
        echo "<script>alert('SUccess')</script>";
        header("Location: ../acset.php");
    }
    else{
        echo "<script>alert('Data GAGAL Diubah!')</script>";
        header("Location: ../changeprofile.php");
    }

?>
