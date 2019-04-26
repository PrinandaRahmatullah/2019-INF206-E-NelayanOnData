<?php
	//buat koneksi dengan database mysql
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpas = "";
	$dbname = "nelayanondata";
	$link = mysqli_connect($dbhost,$dbuser,$dbpas,$dbname);

	if(!$link){
		die("koneksi dengan database gagal : ".mysqli_connect_errno()." - ".mysqli_connect_error());
	}
?>