<?php
    require_once 'db/connect.php';

    $lietkesql = "SELECT * FROM `tbl_ttkh`";
    $result = mysqli_query($conn, $lietkesql);
   
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
   
    <link rel="stylesheet" href="dist/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    
    <script type="text/javascript" src="dist/js/site.min.js"></script>
  </head>
  <body>
    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
          
          <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Admin</a>
          </div>

          
          <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="../index.php"> Website</a></li>
              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Admin <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                  <li class="active"><a href="#">Đăng kí</a></li>
                  <li class="divider"></li>
                  <li class="disabled"><a href="#">Đăng xuất</a></li>
                </ul>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    <!--header-->
    <div class="container-fluid">

        <div class="row row-offcanvas row-offcanvas-left">
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
              <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>Quản Lý</b></li>
              <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Tìm kiếm"></li>
              <li class="list-group-item"><a href="index_admin.php"><i class="glyphicon glyphicon-home"></i>Trang chủ </a></li>              
              <li class="list-group-item"><a href="danhmuc.php"><i class="glyphicon glyphicon-th-list"></i>Danh mục </a></li>
              <li class="list-group-item"><a href="dschuyenbay.php"><i class="glyphicon glyphicon-list-alt"></i>Chuyến bay</a></li>
              <li class="list-group-item"><a href="khachhang.php"><i class="glyphicon glyphicon-bell"></i>Khách hàng</li>
              <li class="list-group-item"><a href="login.php" ><i class="glyphicon glyphicon-lock"></i>Login</a></li>
                
              </ul>
          </div>
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Danh sách khách hàng</h3>
                </div>
            </div>
          </div>

            <!-- Bảng vé đặt -->
              <div class="col-xs-12 col-sm-9 content">
                <div class="table-responsive">
                    <div class="panel info-card radius blue-fill shadowDepth1">
                        <h3 class="text-center">Danh sách khách hàng</h3>
                    </div>
                    <div class="panel info-card radius shadowDepth1 msg small-class">
                        <table class="table table-responsive table-bordered price-table" id="dataTable">
                          <thead>
                            <tr>  
                              <th>Mã Khách Hàng</th> 
                              <th>Họ Tên</th>             
                              <th>Email</th>
                              <th>Giới Tính</th>
                              <th>Số Điện Thoại</th>                   
                              <th>Ngày Đặt Hàng</th>                                                 
                            </tr>
                          </thead>
                          <tbody>             
                            <?php while($row=mysqli_fetch_assoc($result)):?>
                                  <tr>
                                      <td><?php echo $row['id_kh']?></td>
                                      <td><?php echo $row['hoten']?></td>
                                      <td><?php echo $row['email']?></td>
                                      <td><?php echo $row['gioitinh']?></td>
                                      <td><?php echo $row['sdt']?></td>
                                      <td><?php echo $row['date_purchase']?></td>
                                      
                                  </tr>
                              <?php endwhile; ?>                         
                          </tbody>
                        </table>
                    </div>
                </div>
              </div>
              
              
            </div>
          </div>


  </body>
</html>
