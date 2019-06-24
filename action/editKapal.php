<?php
    require_once "connection.php";
    
    $nomor = $_POST["nomor"];
    $nama = $_POST["Nama_kapal"];
    $ukuran = $_POST["ukuran"];
    $kondisi = $_POST["Kondisi"];
    $status = $_POST["Status"];

    $ubah = $link->query("update data_kapal set Nama_kapal='$nama', Besar_muatan='$ukuran', Kondisi='$kondisi', Status='$status' where No_Kapal = $nomor");

    if ($ubah) {
    }
    else{
    }

?>
<script>
    location.replace("../kapal.php");
</script>
