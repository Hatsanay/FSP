<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_fistshop";

    // $host = "localhost";
    // $username = "dikitcom_adminroot";
    // $password = "N0rvAoxKXKdS";
    // $dbname = "dikitcom_db_crna";
    
    // Create connection
    $con = mysqli_connect($host, $username, $password, $dbname)or die('tidak terkoneksi');
    // $con = mysqli_connect('localhost', 'adminroot', '1234', 'db_crna') or die('tidak terkoneksi');
?>