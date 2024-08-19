<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "ql_vemaybay";

    $conn = new mysqli($host, $username, $password, $db);
    if($conn->connect_error){
        die("Kết nối thành công: " . $conn->connect_error);
    }
?>