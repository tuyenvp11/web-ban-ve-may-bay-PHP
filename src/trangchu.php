
<section class="banner">
  <div id="banner-new" class="owl-carousel">
    <div class="item" style="background: url(images/banner-maybay-1.jpg) no-repeat center center;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="banner-box">

                  
            </div>
          </div>
      </div>
    </div>
  </div>
	<div class="item" style="background: url(images/banner-maybay-2.jpg) no-repeat center center;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="banner-box">

                
          </div>
        </div>
      </div>
    </div>
  </div>
	<div class="item" style="background: url(images/banner-maybay-3.jpg) no-repeat center center;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="banner-box">

                
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="item" style="background: url(images/may-bay.jpg) no-repeat center center;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="banner-box">
            
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>

<section class="dv" id="dv">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h1 class="title text-center"><strong>ĐẠI LÝ VÉ MÁY BAY TOÀN QUỐC.</strong></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        
        <div class="col-md-4">
            <div class="fitimg">
              <img src="images/may-bay.jpg" />
            </div>
        </div>
        <div class="col-md-8">
            <h2 class="subtitle">Vì sao bạn nên mua vé trên <a href="http://tau.vn"><strong>dailyvemaybay.com</strong></a>?</h2>

          <ul class="list">
            <li>Tiện lợi, chỉ vài bước đơn giản là có vé ngay.</li>
            <li>Thanh toán dễ dàng qua các ngân hàng / ví.</li>
            <li>An toàn và được hỗ trợ tận tình.</li>
        </ul>
        


        </div>
      </div>
    </div>
  </div>

    <?php
      require_once 'connectdb.php';
      $lietkesql = "SELECT * FROM tbl_dschuyenbay";
      $result = mysqli_query($conn, $lietkesql);
    ?>

  <div class="container" style="padding-top:50px;">
	
	    <div class="row">
          <div class="col-md-12 border-tlr-radius price">
          
            <div class="panel info-card radius blue-fill shadowDepth1">
                <h3>Bảng giá vé máy bay mới nhất</h3>
            </div>
            <div class="panel info-card radius shadowDepth1 msg small-class">
            <table class="table table-responsive table-bordered price-table" id="dataTable">
                            <thead>
                                <tr>                      
                                    <th>Điểm Đi</th>
                                    <th>Điểm Đến</th>
                                    <th>Ngày Đi</th>
                                    <th>Ngày Về</th>
                                    <th>Hãng hàng không</th>
                                    <th>Loại Chuyến Bay</th>
                                    <th>Tình trạng chuyến bay</th>
                                    <th>Số Ghế Còn Lại</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row=mysqli_fetch_assoc($result)):?>
                                    <tr>
                                        <td><?php echo $row['diemdi']?></td>
                                        <td><?php echo $row['diemden']?></td>
                                        <td><?php echo $row['ngaydi']?></td>
                                        <td><?php echo $row['ngayve']?></td>
                                        <td><?php echo $row['hanghk']?></td>
                                        <td><?php echo $row['loaicb']?></td>
                                        <td><?php echo $row['tinhtrangcb']?></td>
                                        <td><?php echo $row['tinhtrangghe']?></td>
          
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
              <br>
              <ul class="ul-circle">
                  <li>Trẻ em dưới 6 tuổi hoặc cao dưới 1m2 được miễn phí vé khi ngồi cùng người lớn. Trẻ em (6 - 11 tuổi) và người cao tuổi (trên 60 tuổi) được áp dụng giảm giá vé Eco.</li>
              </ul>
          </div>


        </div>
      </div>
    

      
  </div>
</section>