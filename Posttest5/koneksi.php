<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "buku_terjual";

    $conn = mysqli_connect($server, $user, $password, $db_name);

    if(!$conn){
        die("gagal terhubung ke data base: " .mysqli_connect_error());
    }

?>