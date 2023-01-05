<?php
  include 'lib/session.php';
  Session::init();
  ob_start();
?>
<?php
  include_once 'lib/database.php';
  include_once 'helpers/format.php';
  spl_autoload_register(function($class){
      include_once "classes/".$class.".php";
  });

  $db = new Database();
  $cat = new category();
  $product = new product();
?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!doctype html>
<html lang="en">

<head>
  <base href="http://localhost/namviet/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link
    href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,500i,700|Roboto:300,400,500,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="public/css/vendor/icomoon/style.css">
  <link rel="stylesheet" href="public/css/vendor/owl.carousel.min.css">
  <link rel="stylesheet" href="public/css/vendor/aos.css">
  <link rel="stylesheet" href="public/css/vendor/animate.min.css">
  <link rel="stylesheet" href="public/css/vendor/bootstrap.css">
  <link rel="stylesheet" href="public/css/vendor/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="public/css/style.css">
  <title>Nam Viet</title>
</head>

<body>
  <div id="untree_co--overlayer"></div>
  <!-- <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->

  <nav class="untree_co--site-mobile-menu">
    <div class="close-wrap d-flex">
      <a href="#" class="d-flex ml-auto js-menu-toggle">
        <span class="close-label">Close</span>
        <div class="close-times">
          <span class="bar1"></span>
          <span class="bar2"></span>
        </div>
      </a>
    </div>
    <div class="site-mobile-inner"></div>
  </nav>
  <div class="untree_co--site-wrap">
    <nav class="untree_co--site-nav js-sticky-nav">
      <div class="container d-flex align-items-center">
        <div class="logo-wrap">
          <a href="./" class="untree_co--site-logo">Nam Việt</a>
        </div>
        <div class="site-nav-ul-wrap text-center d-none d-lg-block">
          <ul class="site-nav-ul js-clone-nav">
            <li><a href="./">Giới Thiệu</a></li>
            <li class="has-children">
              <a href="category.php">Danh mục</a>
              <ul class="dropdown">
                <?php
                $show_cat = $cat -> show_category();
                if($show_cat){
                    while($result = $show_cat->fetch_assoc()){
                ?>
                <li class="has-children">
                  <a href="san-pham/<?php echo $result['slug'] ?>.html">
                    <?php echo $result['cat_name'] ?>
                  </a>
                  <!-- <ul class="dropdown">
                    <li>
                      <a href="#">Thiết Kế Nội Thất A</a>
                    </li>
                    <li>
                      <a href="#">Thiết Kế Nội Thất B</a>
                    </li>
                    <li>
                      <a href="#">Thiết Kế Nội Thất C</a>
                    </li>
                  </ul> -->
                </li>
                <?php }} ?>
              </ul>
            </li>
            <li class="has-children active">
              <a href="product.php">Sản phẩm</a>
              <ul class="dropdown">
                <li class="has-children">
                  <a href="">
                    Thiết kế
                  </a>
                  <ul class="dropdown">
                    <li>
                      <a href="#">Thiết Kế Nội Thất A</a>
                    </li>
                    <li>
                      <a href="#">Thiết Kế Nội Thất B</a>
                    </li>
                    <li>
                      <a href="#">Thiết Kế Nội Thất C</a>
                    </li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="">
                    Trang Trí
                  </a>
                  <ul class="dropdown">
                    <li>
                      <a href="#">Trang Trí Nội Thất A</a>
                    </li>
                    <li>
                      <a href="#">Trang Trí Nội Thất B</a>
                    </li>
                    <li>
                      <a href="#">Trang Trí Nội Thất C</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="trung-bay">Trưng bày</a></li>
            <li><a href="about">Về chúng tôi</a></li>
            <li><a href="lien-he">Liên Hệ</a></li>
          </ul>
        </div>
        <div class="icons-wrap text-md-right">
          <ul class="icons-top d-none d-lg-block">
            <li class="mr-4">
              <a href="#" class="js-search-toggle"><span class="icon-search2"></span></a>
            </li>
            <!-- <li>
              <a href="#"><span class="icon-facebook"></span></a>
            </li>
            <li>
              <a href="#"><span class="icon-twitter"></span></a>
            </li>
            <li>
              <a href="#"><span class="icon-instagram"></span></a>
            </li> -->
          </ul>
          <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>
      </div>
    </nav>