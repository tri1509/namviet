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
      <div class="navbar-brand"><a href="./">NAM VIET</a></div>
      <div class="nav-right ">
        <div class="btn-group mr-auto">
          <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="plus-icon fas fa-plus-circle"></i>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="add-post.php">Thêm bài viết</a>
            <a class="dropdown-item" href="add-product.php">Thêm sản phẩm</a>
            <a class="dropdown-item" href="">Thêm đơn hàng</a>
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
    <div id="page-body" class="d-flex">
      <div id="sidebar" class="bg-white">
        <ul id="sidebar-menu">
          <li class="nav-link">
            <a href="./">
              <div class="nav-link-icon d-inline-flex">
                <i class="far fa-folder"></i>
              </div>
              Admin
            </a>
            <i class="arrow fas fa-angle-right"></i>
          </li>
          <li class="nav-link active">
            <a href="list-product.php">
              <div class="nav-link-icon d-inline-flex">
                <i class="far fa-folder"></i>
              </div>
              Sản phẩm
            </a>
            <i class="arrow fas fa-angle-down"></i>
            <ul class="sub-menu">
              <li><a href="add-product.php">Thêm mới</a></li>
              <li><a href="list-product.php">Danh sách</a></li>
              <li><a href="cat-product.php">Dịch vụ</a></li>
            </ul>
          </li>
          <li class="nav-link active">
            <a href="list-product.php">
              <div class="nav-link-icon d-inline-flex">
                <i class="far fa-folder"></i>
              </div>
              Bài viết
            </a>
            <i class="arrow fas fa-angle-down"></i>
            <ul class="sub-menu">
              <li><a href="add-post.php">Thêm mới</a></li>
              <li><a href="list-post.php">Danh sách</a></li>
            </ul>
          </li>
          <li class="nav-link active">
            <a href="list-product.php">
              <div class="nav-link-icon d-inline-flex">
                <i class="far fa-folder"></i>
              </div>
              Khách hàng
            </a>
            <i class="arrow fas fa-angle-down"></i>
            <ul class="sub-menu">
              <li><a href="list-contact.php">Góp ý</a></li>
            </ul>
          </li>
        </ul>
      </div>