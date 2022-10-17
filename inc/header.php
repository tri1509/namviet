<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link
    href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,500i,700|Roboto:300,400,500,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/vendor/icomoon/style.css">
  <link rel="stylesheet" href="css/vendor/owl.carousel.min.css">
  <link rel="stylesheet" href="css/vendor/aos.css">
  <link rel="stylesheet" href="css/vendor/animate.min.css">
  <link rel="stylesheet" href="css/vendor/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Nam Viet</title>
</head>

<body>
  <div id="untree_co--overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

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
      class="untree_co--site-nav js-sticky-nav <?php if(basename($_SERVER['PHP_SELF']) == 'about.php' || basename($_SERVER['PHP_SELF']) == 'contact.php'){ echo "dark";}else{echo "";}?>">
      <div class="container d-flex align-items-center">
        <div class="logo-wrap">
          <a href="./" class="untree_co--site-logo">LuxuryHotel</a>
        </div>
        <div class="site-nav-ul-wrap text-center d-none d-lg-block">
          <ul class="site-nav-ul js-clone-nav">
            <li <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){ 
              echo "class='active' ";
            }else{
              echo "";
            }?>><a href="./">Giới Thiệu</a></li>
            <li class="has-children <?php if(basename($_SERVER['PHP_SELF']) == 'dichvu.php'){ 
              echo "active";
            }else{
              echo "";
            }?>">
              <a href="dichvu.php">Dịch Vụ</a>
              <ul class="dropdown">
                <li class="has-children">
                  <a href="#">Thiết Kế Nội Thất</a>
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
                <li>
                  <a href="#">Trang Trí Nội Thất</a>
                </li>
                <li>
                  <a href="#">Thiết Kế Nội Thất A</a>
                </li>
              </ul>
            </li>
            <li <?php if(basename($_SERVER['PHP_SELF']) == 'rooms.php'){ 
              echo "class='active' ";
            }else{
              echo "";
            }?>><a href="rooms.php">Công Trình</a></li>
            <li <?php if(basename($_SERVER['PHP_SELF']) == 'gallery.php'){ 
              echo "class='active' ";
            }else{
              echo "";
            }?>><a href="gallery.php">Trưng bày</a></li>
            <li <?php if(basename($_SERVER['PHP_SELF']) == 'about.php'){ 
              echo "class='active' ";
            }else{
              echo "";
            }?>><a href="about.php">Về chúng tôi</a></li>
            <li <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php'){ 
              echo "class='active' ";
            }else{
              echo "";
            }?>><a href="contact.php">Liên Hệ</a></li>
          </ul>
        </div>
        <div class="icons-wrap text-md-right">
          <ul class="icons-top d-none d-lg-block">
            <li class="mr-4">
              <a href="#" class="js-search-toggle"><span class="icon-search2"></span></a>
            </li>
            <li>
              <a href="#"><span class="icon-facebook"></span></a>
            </li>
            <li>
              <a href="#"><span class="icon-twitter"></span></a>
            </li>
            <li>
              <a href="#"><span class="icon-instagram"></span></a>
            </li>
          </ul>

          <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>
      </div>
    </nav>