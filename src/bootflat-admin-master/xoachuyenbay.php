<?php
    
    require_once "db/connect.php";

    //lấy giá trị
    $id = $_GET['id'];
   
    $xoasql = "DELETE FROM tbl_dschuyenbay WHERE `id`=$id";
    
    if(mysqli_query($conn, $xoasql)){
        header("location: dschuyenbay.php");
    };
    
?>