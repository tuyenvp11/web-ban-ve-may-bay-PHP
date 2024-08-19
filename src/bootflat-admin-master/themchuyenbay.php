
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
              <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Chuyến bay</h3>              
            </div>             
          </div>
          <div class="container">
            <div class="row justify-content-around">
              <form action="xulydschuyenbay.php" method="post" >
                <h3 class="text-center">Thêm mới chuyến bay</h3>
                <div class="form-group ">
                  <label for="diemdi"> Điểm đi:</label>
                  <input type="text" name="diemdi" id="diemdi" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="diemden"> Điểm đến:</label>
                  <input type="text" name="diemden" id="diemden" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="ngaydi"> Ngày đi:</label>
                  <input type="date" name="ngaydi" id="ngaydi" class="form-control" required>
                </div>
                <div class="form-group"> 
                  <label for="ngayve"> Ngày về:</label>
                  <input type="date" name="ngayve" id="ngayve" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="hanghk">Hãng hàng không: </label>
                    <select name="hanghk" id="hanghk">
                    <option value="">--Chọn--</option>
                      <option value="Vietnam Airlines">Vietnam Airlines</option>
                      <option value="Vietjet Air">Vietjet Air</option>
                      <option value="Bamboo Airways">Bamboo Airways</option>
                    </select>
                  
                </div>
                <div class="form-group">
                  <label for="loaicb">Loại chuyến bay: </label>
                    <select name="loaicb" id="loaicb">
                    <option value="">--Chọn--</option>
                      <option value="Một chiều">Một chiều</option>
                      <option value="Khứ hồi">Khứ hồi</option>
                    </select>
        
                </div>
                
                <div class="form-group">
                  <label for="tinhtrangcb"> Tình trạng chuyến bay:</label>
                  <input type="text" name="tinhtrangcb" id="tinhtrangcb" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="tinhtrangghe"> Tình trạng ghế:</label>
                  <input type="text" name="tinhtrangghe" id="tinhtrangghe" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="giave"> Giá vé(1 chiều):</label>
                  <input type="text" name="giave" id="giave" class="form-control" required>
                </div>
                <div class="form-group">
                  <input type="submit" name="btn_submit" value="Thêm" class="btn btn-primary" required>
                </div>
              </form>
            </div>  
          </div>

                  

        </div>
        
      </div>
    </div>

    
  </body>
</html>
