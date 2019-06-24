<?php
  require_once "connection.php";

    $kode = $_GET["No_Kapal"];

    $delete = $link->query("delete from data_kapal where No_Kapal=$kode");


    if ($delete) {
    }
    else{
    }
?>

<script>
    location.replace("../kapal.php");
</script>