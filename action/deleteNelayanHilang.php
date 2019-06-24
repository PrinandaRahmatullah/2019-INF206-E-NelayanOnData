<?php
  require_once "connection.php";

    $kode = $_GET["NIK"];

    $delete = $link->query("delete from awakhilang where NIK=$kode");


    if ($delete) {
        // echo "<script>alert('Laporan Berhasil Dihapus!')</script>";
    }
    else{
        // echo "<script>alert('Laporan Gagal Dihapus!')</script>";
    }
?>

<script>
    location.replace("../awakhilang.php");
</script>