<?php
  session_start();
  
  include "connectdb.php";
  mysqli_set_charset($conn, 'utf8');
  
  if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbl_login_user WHERE email = '$email'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);
    $checkEmail = mysqli_num_rows($query);
    if($checkEmail == 1){
      //$checkPass = password_verify($password, $data['password']);
      $checkPass = mysqli_num_rows($query);
      if($checkPass){
        //lưu vào session
        $_SESSION['username'] = $data;
        $_SESSION['email'] = $data;
        if(isset($_GET['action'])){
          $action = $_GET['action'];
          header('location: '.$action. '.php');
        }else{
          header ('location: index.php');
        }
      }else{
        echo "<script>alert('Bạn nhập sai mật khẩu');</script>";
      }
    }
    else{
      echo "<script>alert('Email không tồn tại');</script>";
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Đăng nhập</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <div class="container">
      <div class="row justify-content-around">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="col-md-5 bg-light p-3 my-5">
              <h2 class="text-uppercase text-center h3">Đăng Nhập</h2>
              <div class="form-group p-2">
                <label for="email">Email: </label>
                <input type="text" name="email" class="form-control" required="" placeholder="Tên đăng nhập">
              </div>
              <div class="form-group p-2">
                <label for="password">Mật khẩu: </label>
                <input type="password" name="password" class="form-control" required="" placeholder="Mật khẩu">
              </div>
              <div class="form-group p-2">
                <a href="dangki.php">Đăng ký</a>
              </div>
              <div class="form-group p-2">
                <input type="submit" name="login" value="Đăng nhập" class="btn btn-block btn-dark"> 
              </div>
            </form>
      </div>
    </div>
  </body>
</html>