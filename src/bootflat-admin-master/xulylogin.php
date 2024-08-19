<?php

  //lấy thông tin người dùng nhập
  $username = $_POST['username'];
  $password = $_POST['password'];

  //so sánh xem có trùng với dữ liệu trong database không?
  $conn = new mysqli('localhost','root','','ql_vemaybay');

  //truy vấn dữ liệu
  $sql = "SELECT * FROM admin WHERE username = '$username'";

  //thực thi truy vấn
  $result = $conn->query($sql)->fetch_assoc();

  if($result['password'] == $password){
      header('location: index_admin.php');
  }else{
      echo 'Bạn nhập sai thông tin';
  }

?>