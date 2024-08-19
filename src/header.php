<?php

  include "connectdb.php";

  //$user = [];
  $username = (isset($_SESSION['username'])) ? $_SESSION['username'] : [];
  //$username = $_SESSION['username'];
  $vedat = (isset($_SESSION['vedat']))? $_SESSION['vedat'] : [];

  function tongdonhang($vedat){
    $tongdon = 0;
    foreach ($vedat as $key => $value) {
        $tongdon += $value['soluong'];
    }
    return $tongdon;
  }

?>
<!DOCTYPE html>
<html lang="vn">
<head>
<title>Đại lý vé máy bay</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="dat ve may bay online, thanh toan de dang" />
<meta name="description" content="Đặt vé máy bay nhanh chóng đi Sài Gòn, Hà Nội, Phú Quốc, Đà lại"/>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/awesome.css" rel="stylesheet">
<link rel="icon" type="image/png" href="images/pqe.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

<div class="top-header">
    <div class="container">
      <div class="navbar-collapse collapse in" id="myNavbarx" aria-expanded="true" style="">    
        <ul class="nav navbar-nav navbar-left light-font">              
          <i class="fa fa-envelope" aria-hidden="true"></i>     
          <strong><a href="./bootflat-admin-master/login.php">&nbsp;Admin</a></strong> <!-- chèn link trang admin -->
        </ul>   
        <ul class="nav navbar-nav navbar-leftcenter light-font">            
        <!--       <i class="fa fa-phone" aria-hidden="true">&nbsp;</i>           <strong><a href="http://vn4w.com/vn4w">vn4w.com</a></strong>      -->    
        </ul>           &nbsp;          
		    <ul class="nav navbar-nav navbar-right"> 
          <?php if(isset($username['email'])){?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle = "dropdown"><?php echo $username['email']?><b class="caret"></b></a>
              <ul class="dropdown-menu">               
                <li><a href="./dangxuat.php"> Đăng xuất</a></li>
              </ul>
            </li>
          <?php }else{ ?>  
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle = "dropdown">Tài khoản<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a class="a-link" href="./dangnhap.php"> Đăng nhập</a></li> 
                <li><a class="a-link" href="./dangki.php"> Đăng kí</a></li>
              </ul>
            </li>
          <?php } ?> 
        </ul>   

		    <!-- <ul class=" nav navbar-nav navbar-right">          
            <li><a class="a-link" href="./dangnhap.php">               <strong> Đăng nhập</strong></a>            </li> 
            <li><a class="a-link" href="./dangki.php">               <strong> Đăng kí</strong></a>            </li>  
		    </ul> -->
		    
	    </div>

    </div>

</div>

<nav class="navbar navbar-expand-lg navbar-default affix-top" role="navigation" id="BB-nav">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="menu-box">
          <!-- <h1 class="logo"><a href="DatVe"><img src="" alt="" /></a></h1> --> <!-- logo -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".BB-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <div class="menuOut clearfix">
            <ul id="menu" class="nav navbar-nav BB-nav collapse navbar-collapse menu m-menu left">
              <li class="active"><a href="PhuQuocExpress"><strong>Trang chủ</strong></a></li>
              <li><a href="DatVe"><strong>Đặt vé Online</strong></a></li>
              <li><a href="HuongDan"><strong>Thanh Toán</strong></a></li>
              <li><a href="LienHe"><strong>Liên hệ</strong></a></li>
              <li><a href="DangKy"><strong class="fa fa-shopping-cart" style="font-size:24px"> (<?php echo tongdonhang($vedat)?>)</strong></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>