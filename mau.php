<?php include 'classes/post.php';?>
<?php
  $ps = new post();
if(isset($_GET['slug'])){
  $slug = $_GET['slug'];
  $get_detail = $ps -> get_detail($slug);
  if($get_detail){
    $resule = $get_detail -> fetch_assoc();
  }
}
  $title = "chi tiết mẫu";
  include 'inc/header.php';
?>
<main class="untree_co--site-main">
  <div class="untree_co--site-hero inner-page" style="background-image: url('public/images/pn1.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center">
          <div class="site-hero-contents" data-aos="fade-up">
            <h1 class="hero-heading text-white">Chi Tiết</h1>
          </div>
        </div>
      </div>
    </div>
  </div>









  <div class="untree_co--site-section pb-0">
    <div class="video_perform">
      <div class="untree_co--site-section">
        <div class="container">
          <div class="row justify-content-center text-center pt-0 pb-5">
            <div class="col-lg-6 section-heading">
              <h3 class="text-center">Nội thất phòng ngủ</h3>
            </div>
          </div>
          <div class="row gutter-2">
            <div class="col-md-4" data-aos-delay=""><a href="public/images/img_2.jpg" data-fancybox="gallery"><img
                  src="public/images/img_2.jpg" alt="Image" class="img-fluid" /></a></div>
            <div class="col-md-4" data-aos-delay="100"><a href="public/images/img_3.jpg" data-fancybox="gallery"><img
                  src="public/images/img_3.jpg" alt="Image" class="img-fluid" /></a></div>
            <div class="col-md-4" data-aos-delay="100"><a href="public/images/img_4.jpg" data-fancybox="gallery"><img
                  src="public/images/img_4.jpg" alt="Image" class="img-fluid" /></a></div>
            <div class="col-md-12" data-aos-delay="200"><a href="public/images/pn2.jpg" data-fancybox="gallery"><img
                  src="public/images/pn2.jpg" alt="Image" class="img-fluid" /></a></div>
            <div class="col-md-3" data-aos-delay=""><a href="public/images/pn3.jpg" data-fancybox="gallery"><img
                  src="public/images/pn3.jpg" alt="Image" class="img-fluid" /></a></div>
            <div class="col-md-8" data-aos-delay="100"><a href="public/images/tc-phongngu2.jpg"
                data-fancybox="gallery"><img src="public/images/tc-phongngu2.jpg" alt="Image" class="img-fluid" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row no-gutters align-items-stretch room-animate site-section">
    <div class="col-md-7 img-wrap" data-jarallax-element="-100">
      <div class="bg-image h-100"
        style="background-color: #efefef; background-image: url('public/images/img-cuahang.jpg');">
        <div class="da-chitiet"><a href=""><span>Xem Thêm</span></a></div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="row justify-content-center">
        <div class="col-md-8 py-5">
          <h3 class="display-4 heading">Thiết Kế Nội Thất Cửa Hàng</h3>
          <div class="room-exerpt">
            <p>Thiết Kế Nội Thất Chug Cư – Bạn đang phân vân không biết nên chọn phong cách thiết kế nội thất phòng
              khách nào cho ngôi nhà của mình?.Dưới đây là danh sách tổng hợp các xu hướng thiết kế không gian tốt
              nhất sẽ khiến cho ngôi nhà của bạn trở nên rực rỡ và tiện nghi.Có rất nhiều hình mẫu tham khảo cho từng
              loại nội thất và vật dụng.Ngoài ra còn có các bố trí đặc trưng cho từng căn hộ lớn nhỏ khác nhau.</p>
            <p>Nếu bạn đã,đang và sẽ kinh doanh nhà hàng thì bạn không nên xem nhẹ vấn đề đầu tư vào thiết kế nội thất
              nhà hàng đẹp,chuyên nghiệp và có phong cách của riêng mình.Bởi không gian nội thất là một trong những
              yếu tố quyết định đến sự thành công khi kinh doanh nhà hàng.</p>
            <div class="row mt-5">
              <div class="col-12">
                <h3 class="mb-4">Tại Sao Bạn Nên Chọn Nam Việt?</h3>
                <ul class="list-unstyled ul-check">
                  <li>Có>10 năm kinh nghiệm trong lĩnh vực Thiết kế – Xây dựng</li>
                  <li>Chất lượng hơn số lượng</li>
                  <li>Cam kết 100%sử dụng nguyên vật liệu đã báo giá</li>
                  <li>Chỉnh chu đến từng chi tiết</li>
                  <li>Có cam kết bảo hành sau xây dựng</li>
                  <li><a href="" style="color: black; font-size: 1rem; border-bottom: 1px solid black;">Liên Hệ Báo
                      Giá.</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>










</main>
<?php include 'inc/footer.php' ?>