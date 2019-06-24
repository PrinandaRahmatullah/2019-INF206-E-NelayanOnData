<?php
    require_once "../../action/connection.php";
    
    $nomor = $_POST["nomor"];
    $nama = $_POST["Nama_kapal"];
    $ukuran = $_POST["ukuran"];
    $kondisi = $_POST["kondisi"];
    $status = $_POST["status"];
    $nahkoda = $_POST["nahkoda"];

    $ubah = $link->query("update data_kapal set Nama_kapal='$nama', Besar_muatan='$ukuran', Kondisi='$kondisi', Status='$status', Nahkoda='$nahkoda' where No_Kapal = $nomor");

    if ($ubah) {
        echo "<script>alert('SUCCESS!')</script>";
    }
    else{
        echo "<script>alert('GAGAL!')</script>";
    }

?>
<script>
    location.replace("../adminKapal.php");
</script>
