<?php
  $title = "Liên hệ";
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
<main class="untree_co--site-main">
  <div class="untree_co--site-hero inner-page bg-light" style="background-image: url('public/images/slider_2.jpg')">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-9">
          <div class="site-hero-contents" data-aos="fade-up">
            <h1 class="hero-heading">Liên hệ</h1>
            <div class="sub-text w-75">
              <p>Các tiện nghi được cung cấp có thể bao gồm từ một tấm nệm chất lượng khiêm tốn trong một căn phòng nhỏ
                đến những dãy phòng lớn với to hơn.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="untree_co--site-section">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h2 class="display-4 mb-5">Thông tin khách hàng</h2>
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
            <span class="label">Địa chỉ</span>
            <p>Số 60 đường 771A KDC ĐH Bách Khoa,Phường Phú Hữu , Tp.Thủ Đức</p>
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
<?php include 'inc/footer.php' ?>