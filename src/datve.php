
<?php
  require_once "connectdb.php";

  $lietkesql="SELECT * FROM tbl_dschuyenbay";
  $result = mysqli_query($conn, $lietkesql);
  
?>

<style>

  /* .btn {
    padding: 10px 20px;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  } 
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .form-control {
    border-radius: 0;
  } */
  
</style>

<section class="dv" id="dv">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h1 class="title text-center">Tìm chuyến bay</h1>
      </div>
    </div>
    
    <div class="line mt-5 p-5">
        <form action="" method="POST" class="">
          <div class="form-group">
            <label for="diemdi" class="form-label">Điểm đi:</label>
            <input type="text" class="form-control"  name="diemdi" id="diemdi" placeholder="Nhập nơi đi">
          </div>
          <div class="form-group">
            <label for="diemden" class="form-label">Điểm đến:</label>
            <input type="text" class="form-control"  name="diemden" id="diemden" placeholder="Nhập nơi đến">
          </div>
          <div class="form-group">
            <button type="submit" name="search" class="btn btn-primary ">Tìm kiếm</button>
          </div>
        </form>
      </div>

        <?php
        //xử lý tìm kiếm chuyến bay
        if(isset($_POST['search'])){
          $tukhoa = $_POST['diemdi'];
          if($tukhoa == ""){
            echo "Vui lòng nhập điểm đi hoặc điểm đến!";
          }else{
            $sql_timkiem = "SELECT * FROM tbl_dschuyenbay WHERE diemdi LIKE '%" . $tukhoa . "%'";
            $query_timkiem = mysqli_query($conn, $sql_timkiem);
            $count = mysqli_num_rows($query_timkiem);

            if($count <= 0){
              echo "Không tìm thấy kết quả nào với địa điểm của khách hàng!";
            }else{
              ?>
                <div class="panel info-card radius blue-fill shadowDepth1">
                  <h3>Chuyến bay</h3>
                </div>
                <div class="panel info-card radius shadowDepth1 msg small-class">
                  <table class="table table-responsive table-bordered price-table">
                      <thead>
                          <tr>                      
                              <th>Điểm Đi</th>
                              <th>Điểm Đến</th>
                              <th>Ngày Đi</th>
                              <th>Ngày Về</th>
                              <th>Loại Chuyến Bay</th>
                              <th>Hãng hàng không</th>
                              <th>Tình Trạng Chuyến Bay</th>
                              <th>Số Ghế Còn Lại</th>  
                              <th>Đặt Vé Tại Đây</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php while($row=mysqli_fetch_assoc($query_timkiem)):?>
                                  <tr>
                                      <td><?php echo $row['diemdi']?></td>
                                      <td><?php echo $row['diemden']?></td>
                                      <td><?php echo $row['ngaydi']?></td>
                                      <td><?php echo $row['ngayve']?></td>
                                      <td><?php echo $row['loaicb']?></td>
                                      <td><?php echo $row['hanghk']?></td>
                                      <td><?php echo $row['tinhtrangcb']?></td>
                                      <td><?php echo $row['tinhtrangghe']?></td>
                                      
                                      <td>
                                        <a href="xulygiohang.php?id=<?php echo $row['id'];?>" name="ChonCB">Chọn chuyến bay</a>
                                      </td>
                                      <!-- <td>
                                        <a href="#" data-toggle="modal" data-target="#myModal">Đặt vé</a>
                                      </td> -->
                                  </tr>
                              <?php endwhile; ?>
                      </tbody>
                  </table>
                  <br>
                      <ul class="ul-circle">
                          <li>Trẻ em dưới 6 tuổi hoặc cao dưới 1m2 được miễn phí vé khi ngồi cùng người lớn. Trẻ em (6 - 11 tuổi) và người cao tuổi (trên 60 tuổi) được áp dụng giảm giá vé Eco.</li>
                      </ul>
                    </div>
                      <?php
                    }
                  }
                }
              ?>

              <!-- Link đến Bootstrap JS và Popper.js (cần thiết cho Bootstrap) -->
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

              <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
              <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
              
              <!-- madal -->
              <!-- <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
              
                
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Vé</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form">
                      
                      <div class="form-group">
                        <label for="hangghe"><span class="glyphicon glyphicon-shopping-cart"></span> Chọn hàng ghế</label>
                        <select name="hangghe" id="" class="form-control">
                          <option value="">---Chọn---</option>                          
                          <option value="">A1</option>                      
                          <option value="">A2</option>
                          <option value="">A3</option>
                          <option value="">B1</option>
                          <option value="">B2</option>
                          <option value="">B3</option>
                          <option value="">C1</option>
                          <option value="">C2</option>
                          <option value="">C3</option>
                          <option value="">D1</option>
                          <option value="">D2</option>
                          <option value="">D3</option>
                          <option value="">E1</option>
                          <option value="">E2</option>
                          <option value="">E3</option>
                          <option value="">E4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="slve"><span class="glyphicon glyphicon-shopping-cart"></span> Số lượng vé</label>
                        <input type="number" class="form-control" id="slve" placeholder="Bao nhiêu vé?">
                      </div>                                           
                        <button type="submit" class="btn btn-primary">Đặt vé 
                          <span class="glyphicon glyphicon-ok"></span>
                        </button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                      <span class="glyphicon glyphicon-remove"></span> Huỷ bỏ
                    </button>
                    <p> <a href="#">Trợ giúp?</a></p>
                  </div>
                </div>
              </div>
            </div> -->

  </div>

</section>

