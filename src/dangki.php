<?php
    session_start();
    
    include "connectdb.php";

    $err = [];
    if(isset($_POST['DK'])&&($_POST['DK'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rpassword = $_POST['rpassword'];

        /* if(empty($username)){
            $err['username'] = "Bạn chưa nhập tên đăng nhập";           
        }
        if(empty($email)){
            $err['email'] = "Bạn chưa nhập email";           
        }
        if(empty($password)){
            $err['password'] = "Bạn chưa nhập mật khẩu";           
        }
        if(empty($rpassword != $password)){
            $err['rpassword'] = "Mật khẩu nhập lại không đúng";           
        } */
        //var_dump(!empty($err));
        /* if(empty($err)){

            $pass = password_hash($password, PASSWORD_DEFAULT);
            //var_dump($pass);
            //die(); 

            $sql="INSERT INTO `tbl_login_user` (`username`, `email`, `password`) VALUE ('$username', '$email', '$pass')";
            $query = mysqli_query($conn, $sql);
            
            if($query){
              header('location: dangnhap.php');
            }
        } */
        $sql="INSERT INTO `tbl_login_user` (`username`, `email`, `password`) VALUE ('$username', '$email', '$password')";
        $query = mysqli_query($conn, $sql);
        
        /* $_SESSION['email'] = $email;
        $_SESSION['password'] = $password; */

        if($query == true){
          $_SESSION['email'] = $email;
         
          echo "<script>alert('Đăng kí thành công');</script>";
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Đăng kí</title>
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
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" role="form" class="col-md-5 bg-light p-3 my-5">
              <h2 class="text-uppercase text-center h3">Đăng Ký</h2>
              <div class="form-group p-2">
                <label for="username">Tên đăng nhập: </label>
                <input type="text" name="username" class="form-control" required=""  placeholder="Tên đăng nhập">
                <div class="has-error">
                    <span <?php echo (isset($err['username']))?$err['username']:'' ?>></span>
                </div>
              </div>              
              <div class="form-group p-2">
                <label for="email">Email: </label>
                <input type="text" name="email" class="form-control"  required=""  placeholder="email">
                <div class="has-error">
                    <span <?php echo (isset($err['email']))?$err['email']:'' ?>></span>
                </div>
              </div>
              <div class="form-group p-2">
                <label for="password">Mật khẩu: </label>
                <input type="password" name="password" class="form-control" required=""  placeholder="Mật khẩu">
                <div class="has-error">
                    <span <?php echo (isset($err['password']))?$err['password']:'' ?>></span>
                </div>
              </div>
              <div class="form-group p-2">
                <label for="rpassword">Nhập lại mật khẩu: </label>
                <input type="password" name="rpassword" class="form-control" required=""  placeholder="Nhập lại mật khẩu">
                <div class="has-error">
                    <span <?php echo (isset($err['rpassword']))?$err['rpassword']:'' ?>></span>
                </div>
              </div>
              <div class="form-group p-2">
                <a href="dangnhap.php">Đăng nhập</a>
              </div>
              <div class="form-group p-2">
                <input type="submit" name="DK" value="Đăng ký" class="btn btn-block btn-dark"> 
              </div>
            </form>
      </div>
    </div>
  </body>
</html>