<?php
    include "connectdb.php";
    session_start();

    $item = [];
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $action = (isset($_GET['action']))? $_GET['action'] : 'add';
    $soluong = (isset($_GET['soluong']))? $_GET['soluong'] : 1;

    if($soluong<=0){
        $soluong = 1;
    }
/* echo $action;
echo"<br>";
echo $id;
die(); */
/* var_dump($_GET);
die(); */
    $query = mysqli_query($conn, "SELECT * FROM `tbl_dschuyenbay` WHERE id='$id'");

    if($query){
        $ticket = mysqli_fetch_assoc($query); 
    }

    $item = [
        'id' => $ticket['id'],
        'diemdi' => $ticket['diemdi'],
        'diemden' => $ticket['diemden'],
        'ngaydi' => $ticket['ngaydi'],
        'hanghk' => $ticket['hanghk'],
        'soluong' => $soluong, 
        'giave' => $ticket['giave']
    ];

    //thêm vé
    if($action == 'add'){
        if(isset($_SESSION['vedat'][$id])){
            $_SESSION['vedat'][$id]['soluong'] += $soluong;
        }else{
            $_SESSION['vedat'][$id] = $item;
        } 
    }

    //cập nhật sl vé
    if($action == 'update'){
        $_SESSION['vedat'][$id]['soluong'] = $soluong;
    }

    //xoá vé
    if($action == 'delete'){
        //var_dump('ok'); die();
        unset($_SESSION['vedat'][$id]);
    }


    header('location: DangKy');

   /*  echo "<pre>";
    print_r($_SESSION['vedat']); */
    
    
?>