<?php
  include "connection.php";

  $namakapal = $_POST["Nama_Kapal"];
  $ukuran = $_POST["Ukuran"];
  $kondisi = $_POST["Kondisi"];
  $status = $_POST["Status"];


  if($link->query("insert into data_kapal (Nama_kapal, Besar_muatan, Kondisi, Status)
  VALUES ('$namakapal',$ukuran,'$kondisi','$status')")){
      header("Location:../kapal.php");
  }
  else{
    header("Location:../kapal.php");
  }

?>