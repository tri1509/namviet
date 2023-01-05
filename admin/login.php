<?php
include '../classes/adminlogin.php';
include '../lib/validation.php';
?>
<?php
	$class = new adminlogin();		
	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		$adminUser = $_POST['adminUser'];
		$adminPass = md5($_POST['adminPass']);
		$login_check = $class->login_admin($adminUser,$adminPass);
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/login.css" />
  <title>Đăng nhập admin</title>
</head>

<body>
  <div id="info"></div>
  <canvas id="canvas"></canvas>
  <div class="container">
    <div class="form-wrap">
      <div class="form-inner">
        <h1 class="title">Đăng nhập</h1>
        <p class="caption mb-4">
          <?php
            if(isset($login_check)) {
              echo $login_check;
            }
          ?>
        </p>
        <form id="form-login" action="" class="pt-3" method="post">
          <div class="form-floating">
            <input type="text" class="form-control" name="adminUser" id="username" placeholder="info@example.com"
              value="<?php echo set_value('username') ; ?>" />
            <label for="username">Tên đăng nhập</label>
            <?php echo form_error('username'); ?>
          </div>

          <div class="form-floating">
            <span class="password-show-toggle js-password-show-toggle"><span class="uil"></span></span>
            <input type="password" class="form-control" id="password" name="adminPass" placeholder="Password" />
            <label for="password">Password</label>
            <?php echo form_error('passwword'); ?>
          </div>

          <div class="d-flex justify-content-between">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="remember" name="remember_me" />
              <label for="remember" class="form-check-label">Ghi nhớ mập khẩu</label>
            </div>

            <!-- <div><a href="">Quên mật khẩu ?</a></div> -->

          </div>

          <div class="d-grid mb-4">
            <input type="submit" class="btn btn-primary" value="Đăng nhập" name="btn_login" id="btn_login">
          </div>

          <div class="mb-2">
            <!-- Bạn chưa có tài khoản? <a href="">Đăng ký</a> -->
          </div>

        </form>
      </div>
    </div>
  </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./js/login.js" type="text/javascript"></script>