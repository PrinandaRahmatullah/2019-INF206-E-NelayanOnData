<?php
require_once "../../action/connection.php";

$kode = $_GET["nik"];

$delete = $link->query("delete from nahkoda where nik=$kode");


if ($delete) {
    echo "<script>alert('Data Berhasil Dihapus!')</script>";
} else {
    echo "<script>alert('Data GAGAL Dihapus!')</script>";
}
?>

<script>
    location.replace("../../adminNahkoda.php");
</script>