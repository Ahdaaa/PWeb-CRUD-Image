<?php
    $server = "localhost"; 
    $user = "root";
    $password = "Anaana123";
    $nama_database = "pendaftaran_siswa";

    $db = mysqli_connect($server, $user, $password, $nama_database);

    if (!$db){
        die("Failed to connect to db: " . mysqli_connect_error());
    }
?>