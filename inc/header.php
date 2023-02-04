<?php
  include 'lib/session.php';
  Session::init();
  ob_start();
  include_once 'lib/database.php';
  include_once 'lib/validation.php';
  include_once 'helpers/format.php';
  spl_autoload_register(function($class){
      include_once "classes/".$class.".php";
  });

  $db = new Database();
  $fm = new Format();
  $sv = new service();
  $ps = new post();
  $cat = new category();
  $product = new product();
  $ct = new contact();

  $uri = $_SERVER['REQUEST_URI'];
  $query = $_SERVER['QUERY_STRING'];
  $domain = $_SERVER['HTTP_HOST'];
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $base = "http://localhost/namviet/";
  if (empty($title)){
    $title = "Nam Việt - Trang chủ";
  }
?>
<!doctype html>
<html lang="en">

<head>
  <base href="<?php echo $base ?>">
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
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <title><?php echo $title ?></title>
</head>

<body>
  <div id="untree_co--overlayer"></div>
  <?php
//   if (session_id() === '')
//   session_start();
//   if( isset( $_SESSION['popup'] ) ){
//       $_SESSION['popup'] += 1;
//   }else{
//       $_SESSION['popup'] = 1;
//   }
//   $luotvao = $_SESSION['popup'];
//   if ($luotvao == '1') {
  ?>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <?php //} ?>
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
    <nav
      class="untree_co--site-nav js-sticky-nav <?php if($url == $base."ve-chung-toi" || $url == $base."lien-he" || $url == $base."tim-kiem"){echo "dark";} ?>">
      <div class="container d-flex align-items-center">
        <div class="logo-wrap">
          <a href="./" class="untree_co--site-logo">Nam Việt</a>
        </div>
        <div class="site-nav-ul-wrap text-center d-none d-lg-block">
          <ul class="site-nav-ul js-clone-nav">
            <li class='<?php if($url == $base){echo "active";} ?>'><a href="./">Trang Chủ</a></li>

            <li class="has-children <?php if($url == $base."dich-vu"){echo "active";} ?>">
              <a href="dich-vu">Dịch Vụ</a>
              <ul class="dropdown">
                <?php
                  $show_service = $sv -> show_service();
                  if($show_service){
                    while($result_service = $show_service->fetch_assoc()){
                ?>
                <li class="has-children text-capitalize">
                  <a href="dich-vu/<?php echo $result_service['slug'] ?>">
                    <?php echo $result_service['name'] ?>
                  </a>
                  <ul class="dropdown">
                    <?php
                      $parent = $result_service['id'];
                      $show_service_lv2 = $sv -> show_service_lv2($parent);
                      if($show_service_lv2){
                        while($result_service_lv2 = $show_service_lv2 -> fetch_assoc()){
                    ?>
                    <li>
                      <a href="dich-vu/<?php echo $result_service['slug'] ?>/<?php echo $result_service_lv2['slug'] ?>">
                        <?php echo $result_service_lv2['name'] ?>
                      </a>
                    </li>
                    <?php }} ?>
                  </ul>
                </li>
                <?php }} ?>
              </ul>
            </li>


            <li class="has-children <?php if($url == $base."san-pham"){echo "active";} ?>">
              <a href="san-pham">Sản phẩm</a>
              <ul class="dropdown">
                <?php
                $show_cat = $cat -> show_category();
                if($show_cat){
                    while($result_cat = $show_cat->fetch_assoc()){
                ?>
                <li class="has-children">
                  <a href="san-pham/<?php echo $result_cat['slug'] ?>">
                    <?php echo $result_cat['cat_name'] ?>
                  </a>
                </li>
                <?php }} ?>
              </ul>
            </li>
            <li <?php if($url == $base."tin-tuc"){echo "class='active'";} ?>><a href="tin-tuc">Tin Tức & Sự Kiện</a>
            </li>
            <li <?php if($url == $base."ve-chung-toi"){echo "class='active'";} ?>><a href="ve-chung-toi">Về chúng
                tôi</a></li>
            <li <?php if($url == $base."lien-he"){echo "class='active'";} ?>><a href="lien-he">Liên Hệ</a></li>
          </ul>
        </div>
        <div class="icons-wrap text-md-right">

          <ul class="icons-top d-none d-lg-block">
            <li class="mr-4">
              <a href="#" class="js-search-toggle"><span class="icon-search2"></span></a>
            </li>
          </ul>

          <!-- Mobile Toggle -->
          <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>
      </div>
    </nav>