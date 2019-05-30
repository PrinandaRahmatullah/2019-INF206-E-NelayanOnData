<?php
require_once "connection.php";

if(isset($_POST["submit"])){
        $nik = $_POST["nik"];
        $nama_kapal = $_POST["nama_kapal"];
        $tanggal = $_POST["tanggal"];
        $anggota = $_POST["anggota"];
        
        $insert = $link->query("INSERT INTO datapergi (NIK, Nama_kapal, Tanggal, Anggota) VALUES ('$nik','$nama_kapal','$tanggal','$anggota')");

        
        //if($insert){
            //echo "success";
        //}
        //else{
           // echo "failure";
        //}
    }
?>
