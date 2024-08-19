<?php
  
    include 'connectdb.php';

    $vedat = (isset($_SESSION['vedat']))? $_SESSION['vedat'] : [];

    /* echo "<pre>";
    print_r($vedat); */ 
    
   include "giohang_function.php";

?>

<?php 

  require "./mail/sendmail.php";

  if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
  }

  if(isset($_POST['hoten'])){
    $id_user = $username['id'];
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $gioitinh = $_POST['gender'];
    $sdt = $_POST['sdt'];

    $query = mysqli_query($conn, "INSERT INTO tbl_ttkh(id_user, hoten, email, gioitinh, sdt) 
    VALUES('$id_user', '$hoten', '$email', '$gioitinh', '$sdt')");

    if($query){
      $id_order = mysqli_insert_id($conn);
      $total = tinhtongtien($vedat);
      foreach ($vedat as $value) {
        mysqli_query($conn, "INSERT INTO `tbl_ds-datve`(id_order, id_ve, diemdi, diemden, ngaydi, hanghk, soluong, tongtien) 
        VALUES('$id_order', '$value[id]', '$value[diemdi]', '$value[diemden]', '$value[ngaydi]', '$value[hanghk]', '$value[soluong]', '$total')");
      }

      unset($_SESSION['vedat']);
      header('location: DatVe');
    }
  }
?>

<section class="dv" id="dv">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h1 class="title text-center">Thanh toán</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">   
        <!-- form điền thông tin --> 
        <?php if(isset($_SESSION['username'])) {?>   
        <div class="col-md-4">        
          <div class="col-sm-4 col-md-12 col-lg-12">  
              <form action="" method="post" >
                  <div class="">                 
                    <h2 class="h3 py-3">Thông tin người đặt vé</h2>
                  </div>
                    <div class="form-group ">
                      <label for="hoten"> Họ và tên:</label>
                      <input type="text" id="hoten" class="form-control" value="<?php echo $username['username']?>" name="hoten">
                    </div>
                    <div class="form-group">
                      <label for="email"> Email:</label>
                      <input type="text" id="email" class="form-control" value="<?php echo $username['email']?>" name="email">
                    </div> 
                    <div class="form-group">
                      <label for="gender">Giới tính: </label>
                      <div>
                        <div class="form-check form-check-inline">
                          <label for="male" class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Nam" checked>Nam
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <label for="female" class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Nữ" >Nữ
                          </label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="sdt"> Số điện thoại:</label>
                      <input type="text" name="sdt" id="sdt" class="form-control" required>
                    </div>                       
                    <div class="form-group">
                      <input type="submit" name="ThanhToan" value="Thanh toán" class="btn" required>
                    </div>
              </form>
          </div>
        </div>
        <?php }else {?>
            <div class="alert alert-danger" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Vui lòng đăng nhập để mua hàng</strong> <a href="dangnhap.php?action=thanhtoan" title="">Đăng nhập</a>
            </div>
        <?php }?>

        <!-- bảng thông tin đơn hàng -->
        <div class="col-md-8">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="panel info-card radius blue-fill shadowDepth1">
              <h3>Vé đặt</h3>
            </div>
            <table class="table table-responsive table-bordered price-table" id="dataTable">
              <thead>
                <tr>  
                              
                  <th>Điểm Đi</th>
                  <th>Điểm Đến</th>
                  <th>Ngày Đi</th>                   
                  <th>Hãng hàng không</th>                   
                  <th>Số Lượng</th>                   
                  <th>Thành tiền</th>
                    
                </tr>
              </thead>
              <tbody>             
                <?php foreach ($vedat as $key => $value) :?>
                  <tr>          
                    <td><?php echo $value['diemdi'] ?></td>
                    <td><?php echo $value['diemden'] ?></td>
                    <td><?php echo $value['ngaydi'] ?></td>
                    <td><?php echo $value['hanghk'] ?></td>
                    <td>
                      <?php echo $value['soluong'] ?>              
                    </td>
                    <td><?php echo number_format($value['giave'] * $value['soluong'])?></td>                   
                  </tr>
                <?php endforeach ?>
                
                <tr>
                  <td>Tổng tiền</td>
                  <td colspan="7" class="text-center bg-info"><?php echo number_format(tinhtongtien($vedat))?> VNĐ</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
		
      </div>
    </div>
  </div>



</section>

