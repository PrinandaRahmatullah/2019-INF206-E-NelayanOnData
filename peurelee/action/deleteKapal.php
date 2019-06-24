<?php
  require_once "../../action/connection.php";

    $kode = $_GET["No_Kapal"];

    $delete = $link->query("delete from data_kapal where No_Kapal=$kode");


    if ($delete) {
        echo "<script>alert('Data Berhasil Dihapus!')</script>";
    }
    else{
        echo "<script>alert('Data GAGAL Dihapus!')</script>";
    }
?>

<script>
    location.replace("../adminKapal.php");
</script>