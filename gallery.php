<?php
  $title = "Tin Tức & Sự Kiện";
  include 'inc/header.php';
  if(!isset($_GET['trang'])) {
    $trang = 1;
  }else{
    $trang = $_GET['trang'];
  }
  // echo $trang;
  $so_sp_trang = 6;
  $post_all = $ps -> count_post_tin_tuc();
  $post_count = mysqli_num_rows($post_all);
  $post_button = $post_count / $so_sp_trang;
?>
<main class="untree_co--site-main">
  <div class="untree_co--site-hero inner-page" style="background-image: url('public/images/pn2.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center">
          <div class="site-hero-contents" data-aos="fade-up">
            <h1 class="hero-heading text-white">Tin Tức & Sự Kiện</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-camket">
    <div class="container">
      <div class="row flex-wrap mr-mobile-left">
        <div class="col-md-3 col-sm-6 col-xs-6 col-12 fwmb bl-camket">
          <div class="flex-bw">
            <img src="public/images/001-delivery-truck.webp" class="img-ck">
            <div class="ct-camket">
              <p class="medi text-uppercase">Tư Vấn & Hổ Trợ</p>
              <p>Tận tâm với từng khách hàng</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-12 fwmb bl-camket">
          <div class="flex-bw">
            <img src="public/images/002-winner.webp" class="img-ck">
            <div class="ct-camket">
              <p class="medi text-uppercase">Chất lượng uy tín</p>
              <p>Đảm bảo 100% chính hãng</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-12 fwmb bl-camket">
          <div class="flex-bw">
            <img src="public/images/006-24-hours-1.webp" class="img-ck">
            <div class="ct-camket">
              <p class="medi text-uppercase">Hỗ trợ online 24/7</p>
              <p>Cam kết giá tốt nhất thị trường</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-12 fwmb bl-camket">
          <div class="flex-bw">
            <img src="public/images/009-piggy-bank.webp" class="img-ck">
            <div class="ct-camket">
              <p class="medi text-uppercase">Tiết kiệm khi lắp đặt</p>
              <p>Gọi ngay <span class="clpink">0901 579 585</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="blog-section">
      <div class="setion-content blog">
        <div class="title">
          <h2>Tin Tức & Sự Kiện Mới</h2>
        </div>
        <div class="cards">
          <?php
          $show_post = $ps -> show_post_tin_tuc();
              if($show_post){
                while($result_post = $show_post ->fetch_assoc()){ 
            ?>
          <div class="card">
            <div class="image-section">
              <a class="image-section-link" href="chi-tiet/<?php echo $result_post['slug'] ?>"
                title="<?php echo $result_post['name'] ?>"> <img src="public/images/<?php echo $result_post['img'] ?>"
                  alt=""></a>
            </div>
            <div class="article">
              <h4><?php echo $result_post['name'] ?></h4>
              <p><?php 
                $rutgon = $fm -> textShorten($result_post['tomtat'],100); 
                echo $rutgon;
              ?></p>
            </div>
            <div class="blog-view">
              <a href="chi-tiet/<?php echo $result_post['slug'] ?>" title="<?php echo $result_post['name'] ?>">
                Xem chi tiết
              </a>
            </div>
          </div>
          <?php }} ?>
        </div>
      </div>
    </div>
    <nav aria-label="Page navigation example ">
      <ul class="pagination justify-content-center">
        <?php if($trang >=2){ ?>
        <li class="page-item">
          <a class="page-link" href="bai-viet/trang-<?php echo $trang - 1 ?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <?php } ?>
        <?php
          for($i=1 ; $i <= ceil($post_button) ; $i++) {
        ?>
        <li class="page-item <?php if ($i == $trang) { echo "active"; } ?>">
          <a class="page-link" href="bai-viet/trang-<?php echo $i ?>">
            <?php echo $i ?>
          </a>
        </li>
        <?php } ?>
        <?php if ($trang < ceil($post_button)){ ?>
        <li class="page-item">
          <a class="page-link" href="bai-viet/trang-<?php echo $trang + 1 ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
        <?php } ?>

      </ul>
    </nav>
    <div class="believe-section">
      <div class="believe-title">
        <h2>Tin xem nhiều</h2>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="believe-post">
            <a href="chi-tiet/thiet-ke-noi-that-vi-mot-cuoc-song-tot-dep-hon">
              <img src="public/images/img-quancf2.jpg" alt="">
            </a>
            <div class="row">
              <div class="col-md-8">
                <div class="text-believe">
                  <a href="">Tin Nam Việt</a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="believe-textright">
                  <strong>759 Lượt xem</strong>
                </div>
              </div>
            </div>
            <a href="chi-tiet/thiet-ke-noi-that-vi-mot-cuoc-song-tot-dep-hon">
              <h3 class="fs-18">Thiết Kế Nội Thất Vì Một Cuộc Sống Tốt Đẹp Hơn</h3>
            </a>
            <p>Khi mọi người ngày càng dành nhiều thời gian sinh hoạt và làm việc tại nhà như hiện nay, thiết…</p>
          </div>
        </div>
        <div class="col-md-4">
          <?php
              $show_post_rand = $ps -> show_post_tin_tuc_rand_4();
              if($show_post_rand){
                while($result_post_rand = $show_post_rand->fetch_assoc()){ 
            ?>
          <div class="believe-item">
            <div class="row">
              <div class="col-md-5">
                <div class="image-item">
                  <a href="chi-tiet/<?php echo $result_post_rand['slug'] ?>">
                    <img src="public/images/<?php echo $result_post_rand['img'] ?>" alt="">
                  </a>
                </div>
              </div>
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-6">
                    <div class="text-believe">
                      <a href="tin-tuc">Tin Nam Việt</a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="believe-textright">
                      <strong></strong>
                    </div>
                  </div>
                </div>
                <a href="chi-tiet/<?php echo $result_post_rand['slug'] ?>">
                  <h3 class="fs-18"><?php echo $result_post_rand['name'] ?></h3>
                </a>
              </div>
            </div>
          </div>
          <?php } } ?>
        </div>
      </div>
    </div>
  </div>

  <div class="gallery_posts">
    <div class="row">
      <div class="container">
        <div class="gallery_wrapper">
          <div class="gallery_img gallery_a">
            <img src="public/images/img-quancf1.jpg" alt="">
            <div class="galler_title">
              <p><span>Góc cảm hứng</span></p>
              <strong>Ý TƯỞNG KHÔNG GIAN SỐNG</strong>
              <a href="#">XEM THÊM ...</a>
            </div>
          </div>
          <div class="gallery_img gallery_b">
            <img src="public/images/img-quancf.jpg" alt="">
          </div>
          <div class="gallery_img gallery_c">
            <img src="public/images/img-quancf2.jpg" alt="">
          </div>
          <div class="gallery_img gallery_d">
            <img src="public/images/img-quancf.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clear60"></div>
  <div class="untree_co--site-section py-5 bg-body-darker cta">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h3 class="m-0 p-0">Nếu bạn có bất kỳ yêu cầu đặc biệt, xin vui lòng gọi cho chúng tôi <a
              href="tel://0901579585">0901 579 585</a></h3>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include 'inc/footer.php' ?>