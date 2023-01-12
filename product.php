<?php
  $title = "Sản phẩm";
  include 'inc/header.php';
?>
<div class="untree_co--site-wrap">
  <main class="site-untree_co--main">
    <div class="untree_co--site-hero inner-page" style="background-image: url('public/images/slider_2.jpg')">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <div class="site-hero-contents" data-aos="fade-up">
              <h3 class="hero-heading text-white">Hạnh Phúc Cho Mọi Nhà</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="countUp">

      <div class="Counter Counter_menber">
        <div class="Counter_img">
          <img src="public/images/icon-duan.png" alt="">
        </div>
        <span>+</span>
        <h1>3300 </h1>
        <h2>Khách Hàng Ghé Thăm</h2>
      </div>
      <div class="Counter Counter_ghetham">
        <div class="Counter_img">
          <img src="public/images/icon-ghetham.png" alt="">
        </div>
        <span>+</span>
        <h1>3300</h1>
        <h2>Bản Thiết Kế</h2>
      </div>
      <div class="Counter Counter_thietke">
        <div class="Counter_img">
          <img src="public/images/icon-thietke.png" alt="">
        </div>
        <span>+</span>
        <h1>3300</h1>
        <h2>Dự Án Hoàng Thành</h2>
      </div>
      <div class="Counter Counter_hailong">
        <div class="Counter_img">
          <img src="public/images/icon-hailong.png" alt="">
        </div>
        <span>+</span>
        <h1>95</h1>
        <h2>Đánh Giá Hài Lòng</h2>
      </div>


    </div>




    <div class="untree_co--site-section">
      <?php
        if(!empty($list_cat)) {
          foreach($list_cat as $cat){
            $cat_id = $cat['cat_id'];
      ?>
      <div class="container">
        <div class="row justify-content-center text-center pt-0 pb-5">
          <div class="col-lg-6 section-heading" data-aos="fade-up">
            <h3 class="text-center"><?php echo $cat['cat_name'] ?></h3>
          </div>
        </div>
        <div class="row custom-row-02192 align-items-stretch">
          <?php
            $show_product = show_product();
            if(!empty($show_product)) {
              foreach($show_product as $item){
          ?>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="media-29191 text-center h-100">
              <div class="home-product__item-img" style="background-image:url(<?php echo $item['product_thumb']; ?>);">
              </div>
              <h3><?php echo $item['product_name'] ?></h3>
              <p><?php echo $item['product_desc'] ?></p>
              <p>
              <p><a href="#" class="readmore reverse">Read More</a></p>
              </p>
            </div>
          </div>
          <?php } } ?>
        </div>
      </div>
      <?php } } ?>
    </div>

    <div class="untree_co--site-section py-5 bg-body-darker cta">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h3 class="m-0 p-0">If you have any special requests, please feel free to call us. <a
                href="tel://+123456789012">+12.345.678.9012</a></h3>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
<?php include 'inc/footer.php' ?>