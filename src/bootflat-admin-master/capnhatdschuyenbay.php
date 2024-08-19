<?php

    //kết nối connect
    require_once 'db/connect.php';
    
    if(isset($_POST['btn_capnhat'])){
        //nhận dữ liệu từ form
        $id = $_POST['id'];
        $diemdi = $_POST['diemdi'];
        $diemden = $_POST['diemden'];
        $ngaydi = $_POST['ngaydi'];
        $ngayve = $_POST['ngayve'];
        $hanghk = $_POST['hanghk'];
        $loaicb = $_POST['loaicb'];
        $tinhtrangcb = $_POST['tinhtrangcb'];
        $tinhtrangghe = $_POST['tinhtrangghe'];
        $giave = $_POST['giave'];
        //cập nhật dữ liệu
        $suasql = "UPDATE tbl_dschuyenbay SET `diemdi` = '$diemdi', `diemden` = '$diemden', `ngaydi` = '$ngaydi', `ngayve` = '$ngayve'
        , `hanghk` = '$hanghk', `loaicb` = '$loaicb', `tinhtrangcb` = '$tinhtrangcb', `tinhtrangghe` = '$tinhtrangghe', `giave` = '$giave' WHERE `id` = '$id'";

        if(mysqli_query($conn, $suasql)){
            header('location: dschuyenbay.php');
        }
    }

?>