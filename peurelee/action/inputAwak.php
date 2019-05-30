<?php
  require_once "../../action/connection.php";

    $ambil = $link->query("SELECT * FROM awakkapal");

	if (isset($_POST["input"])) {
		$NIK = $_POST["NIK"];
		$Nama = $_POST["Nama"];
		$Tanggal_Lahir = $_POST["Tanggal_Lahir"];
		$Kota = $_POST["Kota"];
		$Kecamatan = $_POST["Kecamatan"];
		$Desa = $_POST["Desa"];
		$No_Hp = $_POST["No_Hp"];
		$No_Hp_Darurat = $_POST["No_Hp_Darurat"];

		$input = $link->query("INSERT INTO awakkapal (NIK,Nama,Tanggal_Lahir,Kota,Kecamatan,Desa,No_Hp,No_Hp_Darurat) VALUES ('$NIK','$Nama','$Tanggal_Lahir','$Kota','$Kecamatan','$Desa','$No_Hp','$No_Hp_Darurat')");
	}


    if ($input) {
        echo "<script>alert('Data Berhasil Di input!')</script>";
    }
    else{
        echo "<script>alert('Data GAGAL Di input!')</script>";
    }
?>

<script>
    location.replace("../editawak.php");
</script>