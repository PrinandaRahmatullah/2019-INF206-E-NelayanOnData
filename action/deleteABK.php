<?php
  require_once "connection.php";

    $kode = $_GET["NIK"];

    $delete = $link->query("delete from awakkapal where NIK=$kode");


    if ($delete) {
        echo "<script>alert('ABK Berhasil Dihapus!')</script>";
    }
    else{
        echo "<script>alert('ABK Gagal Dihapus!')</script>";
    }
?>

<script>
    location.replace("../awak.php");
</script>