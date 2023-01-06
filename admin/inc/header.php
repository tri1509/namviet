<?php
include '../lib/session.php';
Session::checkSession();
?>
<?php
  if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    Session::destroy();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/solid.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Admintrator</title>
</head>

<body>
  <div id="warpper" class="nav-fixed">
    <nav class="topnav shadow navbar-light bg-white d-flex">
      <div class="navbar-brand"><a href="">NAM VIET</a></div>
      <div class="nav-right ">
        <div class="btn-group mr-auto">
          <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="plus-icon fas fa-plus-circle"></i>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="?view=add-post">Thêm bài viết</a>
            <a class="dropdown-item" href="?view=add-product">Thêm sản phẩm</a>
            <a class="dropdown-item" href="?view=list-order">Thêm đơn hàng</a>
          </div>
        </div>
        <div class="btn-group">
          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Admin
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Tài khoản</a>
            <a class="dropdown-item" href="?action=logout">Thoát</a>
          </div>
        </div>
      </div>
    </nav>