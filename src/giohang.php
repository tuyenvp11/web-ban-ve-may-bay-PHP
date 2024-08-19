<?php

    include 'connectdb.php';
    
    $vedat = (isset($_SESSION['vedat']))? $_SESSION['vedat'] : [];

    /* echo "<pre>";
    print_r($vedat); */
    
    include "giohang_function.php";
?>

<section class="dv" id="dv">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h1 class="title text-center">Thông tin vé</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
          <!-- <div class="panel info-card radius blue-fill shadowDepth1">
            <h3>Giỏ hàng</h3>
          </div> -->
        <!-- <a href="DatVe" class="btn btn-info">Trở về</a> -->  
          <table class="table table-responsive table-bordered price-table" id="dataTable">
            <thead>
              <tr>  
                <th>Mã vé</th>              
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
                  <td><?php echo $key ++ ?></td>
                  <td><?php echo $value['diemdi'] ?></td>
                  <td><?php echo $value['diemden'] ?></td>
                  <td><?php echo $value['ngaydi'] ?></td>
                  <td><?php echo $value['hanghk'] ?></td>
                  <td>
                    <form action="xulygiohang.php">
                      <input type="hidden" name="action" value="update">
                      <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                      <input type="text" name="soluong" class="input-sm" value="<?php echo $value['soluong'] ?>">
                      <button type="submit" class="btn btn-info btn-sm">Cập nhật</button>
                    </form>                    
                  </td>
                  <td><?php echo number_format($value['giave'] * $value['soluong'])?></td>
                  <td><a href="xulygiohang.php?id=<?php echo $value['id']?>&action=delete" class="btn btn-danger btn-sm">Xoá</a></td>
                </tr>
              <?php endforeach ?>
              <tr>
                <td>Tổng tiền</td>
                <td colspan="7" class="text-center bg-info"><?php echo number_format(tinhtongtien($vedat))?> VNĐ</td>
              </tr>
              
            </tbody>
          </table>

          <a href="HuongDan" class="btn btn-primary">Tiến hành thanh toán</a>

      </div>
    </div>
  </div>
</section>

<section>

</section>

