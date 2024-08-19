<?php
    require "db/connect.php";
    if(isset($_POST['btn_submit'])){
        
        $diemdi = $_POST['diemdi'];
        $diemden = $_POST['diemden'];
        $ngaydi = $_POST['ngaydi'];
        $ngayve = $_POST['ngayve'];
        $hanghk = $_POST['hanghk'];
        $loaicb = $_POST['loaicb'];
        $tinhtrangcb = $_POST['tinhtrangcb'];
        $tinhtrangghe = $_POST['tinhtrangghe'];
        $giave = $_POST['giave'];
        /* $sql = "INSERT INTO dschuyenbay ('diemdi', 'diemden', 'ngaydi', 'ngayve', 'loaicb', 'tinhtrangcb', 'tinhtrangghe') VALUE ('$diemdi', '$diemden', '$ngaydi', '$ngayve', '$loaicb', '$tinhtrangcb', '$tinhtrangghe')";
        if($conn->query($sql) == TRUE){
                header('Location: trangchinh.php');
            }else{
                echo "<script>alert('đăng kí thất bại');</script>";    
            } */
        
        if(!empty($diemdi) && !empty($diemden) && !empty($ngaydi)  
         && !empty($loaicb) && !empty($hanghk) && !empty($tinhtrangcb) && !empty($tinhtrangghe) && !empty($giave)){
            $sql = "INSERT INTO `tbl_dschuyenbay` (`diemdi`, `diemden`, `ngaydi`, `ngayve`, `hanghk`, `loaicb`, `tinhtrangcb`, `tinhtrangghe`, `giave`) 
            VALUE ('$diemdi', '$diemden', '$ngaydi', '$ngayve', '$hanghk', '$loaicb' ,  '$tinhtrangcb', '$tinhtrangghe', '$giave')";

            if($conn->query($sql) == TRUE){
                header('Location: dschuyenbay.php');
            }else{
                echo "Lỗi {$sql}" .$conn->error;    
            }
        }else{
            echo "<script>alert('Bạn cần nhập đầy đủ thông tin');</script>";    
        }
    
    }
    $conn->close();
?>