<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "hotel";

    $db = mysqli_connect($server,$user,$password,$nama_database);

    if (!$db) {
        die("Gagal Terhubung Dengan Database : ".mysqli_connect_error());
    }
?>