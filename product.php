<?php
$title = "Sản phẩm";
include 'inc/header.php';
?>
<?php
	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $error = array();
    $alert = array();
    if(empty($_POST['name'])) {
      $error['name'] = "Bạn vui lòng cung cấp họ và tên";
    }else{
      $name = $_POST['name'];
    }
    if(empty($_POST['phone'])) {
      $error['phone'] = "Bạn vui lòng cung cấp số điện thoại liên lạc";
    }else{
      $phone = $_POST['phone'];
    }
    if(empty($_POST['message'])) {
      $error['message'] = "Bạn vui lòng để lại lời nhắn";
    }else{
      $message = $_POST['message'];
    }

    if(empty($error)){
      $data = array(
        'name' => $name,
        'phone' => $phone,
        'message' => $message,
      );
      $insertContact = $ct->insert_contact($data);
    }
  }
?>
<div class="untree_co--site-wrap">
  <main class="site-untree_co--main">
    <div class="untree_co--site-hero inner-page" style="background-image: url('public/images/pk3.jpg')">
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
    <div class="clear40"></div>
    <div class="wrapper-product">
      <div class="product-menu text-center">
        <div class="container">
          <div class="row">
            <?php
              $show_cat = $cat -> show_category();
              if($show_cat){
                while($result = $show_cat->fetch_assoc()){
              ?>
            <div class="col-md-4">
              <a href="san-pham/<?php echo $result['slug'] ?>" title="<?php echo $result['cat_name'] ?>"
                class="fs-18 text-dark readmore">
                <?php echo $result['cat_name'] ?>
              </a>
            </div>
            <?php } } ?>
          </div>
        </div>
      </div>
      <div class="clear20"></div>
      <div class="product-noithat">
        <img src="public/images/banner-noithat.jpg" alt="">
      </div>
      <div class="clear40"></div>
      <div class="blog-section">
        <div class="setion-content blog">
          <div class="cards">
            <?php
              $show_post = $ps -> show_post_noi_that();
              if($show_post){
                while($result_post = $show_post->fetch_assoc()){ 
            ?>
            <div class="card">
              <div class="image-section">
                <a class="image-section-link" href="chi-tiet/<?php echo $result_post['slug'] ?>"
                  title="<?php echo $result_post['name'] ?>"><img src="public/images/<?php echo $result_post['img'] ?>"
                    alt=""></a>
              </div>
              <div class="article">
                <h4><?php echo $result_post['name'] ?></h4>
                <strong><?php echo $result_post['content'] ?></strong>
                <p><?php echo $result_post['tomtat'] ?></p>
              </div>
              <div class="blog-view">
                <a href="chi-tiet/<?php echo $result_post['slug'] ?>" title="<?php echo $result_post['name'] ?>">
                  Chi Tiết
                </a>
              </div>
            </div>

            <?php } } ?>
          </div>

          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- <div class="countUp">
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
    </div> -->
    <script>
    var mb = document.querySelector(".Counter_menber h1");
    var gt = document.querySelector(".Counter_ghetham h1");
    var tk = document.querySelector(".Counter_thietke h1");
    var hl = document.querySelector(".Counter_hailong h1");

    function count(el, to) {
      var count = 0;

      let counting = setInterval(() => {
        count += to / 500;
        if (count > to) {
          clearInterval(counting);
          el.innerText = to;
        } else {
          el.innerText = Math.round(count);
        }
      }, 1);
    }

    count(mb, 3300);
    count(gt, 1880);
    count(tk, 968);
    count(hl, 1124);
    </script>
    <div class="untree_co--site-section">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h2 class="display-4 mb-5">Liên hệ Với chúng tôi!</h2>
            <?php if(isset($insertContact)){echo $insertContact;}?>
          </div>
          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <form action="" method="post">
              <div class="form-group">
                <label for="name">Họ và Tên *</label>
                <input type="text" class="form-control" id="name" name="name"
                  value="<?php if(!empty($name)){echo $name;}?>">
                <span class='text-danger'>
                  <?php if(!empty($error['name'])) {echo $error['name'];} ?>
                </span>
              </div>
              <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone"
                  value="<?php if(!empty($phone)){echo $phone;}?>">
                <span class='text-danger'>
                  <?php if(!empty($error['phone'])) {echo $error['phone'];} ?>
                </span>
              </div>
              <div class="form-group">
                <label for="message">Lời nhắn *</label>
                <textarea name="message" class="form-control" id="message" cols="30"
                  rows="10"><?php if(!empty($message)){echo $message;}?></textarea>
                <span class='text-danger'>
                  <?php if(!empty($error['message'])) {echo $error['message'];} ?>
                </span>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Gửi" class="btn btn-black px-5 text-white">
              </div>
            </form>
          </div>
          <div class="col-md-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <div class="media-29190">
              <span class="label">Email</span>
              <p><a href="#">namviet.gmail.com</a></p>
            </div>
            <div class="media-29190">
              <span class="label">Số điện thoại</span>
              <p><a href="#">+30 931 3829 399</a></p>
            </div>
            <div class="media-29190">
              <span class="label">Liên Hệ</span>
              <p>Bộ phận chăm sóc khách hàng của Trường Thắng luôn túc trực để nhận được thông tin phản hồi của Quý
                khách. Hãy để lại đầy đủ thông tin để được hỗ trợ tốt nhất.</p>
            </div>
            <div class="media-29190">
              <span class="label">Social</span>
              <ul class="icons-top icons-dark">
                <!-- <li>
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-tripadvisor"></span></a>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

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
</div>
<?php include 'inc/footer.php' ?>