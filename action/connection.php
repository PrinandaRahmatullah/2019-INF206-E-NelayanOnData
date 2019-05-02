<?php
    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASS = '';
    $DB_NAME = 'nelayanondata';

    try{
        $link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    }
    catch(PDOException $link){
        echo "Failed to connect to mySQL: " . mysqli_connect_error();
    }
    date_default_timezone_set("Asia/Jakarta");
?>