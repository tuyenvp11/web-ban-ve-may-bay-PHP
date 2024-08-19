

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
    <style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #303641;
        color: #C1C3C6
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form class="form-signin" role="form" action="xulylogin.php" method="POST">
        <h3 class="form-signin-heading">Đăng nhập</h3>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-user"></i>
            </div>
            <input type="text" class="form-control" name="username" id="username" placeholder="Tên đăng nhập" autocomplete="off" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphi con glyphicon-lock "></i>
            </div>
            <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu" autocomplete="off" />
          </div>
        </div>

        <label class="checkbox">
          <input type="checkbox" value="remember-me"> &nbsp Nhớ mật khẩu
        </label>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
      </form>

    </div>
      <div class="clearfix"></div>
    <br><br>
    <!--footer-->
    <!-- <div class="site-footer login-footer">
      <div class="container">
        <div class="copyright clearfix text-center">
          <p><b>Bootflat</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="getting-started.html">Getting Started</a>&nbsp;&bull;&nbsp;<a href="index.html">Documentation</a>&nbsp;&bull;&nbsp;<a href="https://github.com/Bootflat/Bootflat.UI.Kit.PSD/archive/master.zip">Free PSD</a>&nbsp;&bull;&nbsp;<a href="colors.html">Color Picker</a></p>
          <p>Code licensed under <a href="http://opensource.org/licenses/mit-license.html" target="_blank" rel="external nofollow">MIT License</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/" rel="external nofollow">CC BY 3.0</a>.</p>
        </div>
      </div>
    </div> -->
  </body>
</html>
