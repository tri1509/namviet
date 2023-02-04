<?php
  $title = "Dịch vụ";
  include 'inc/header.php';
?>
<main class="untree_co--site-main">
  <div class="untree_co--site-hero inner-page" style="background-image: url('public/images/slider_2.jpg')">
    <!-- <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center">
          <div class="site-hero-contents" data-aos="fade-up">
            <h1 class="hero-heading text-white">Our Rooms</h1>
          </div>
        </div>
      </div>
    </div> -->
  </div>

  <div class="container">
    <div class="count_content">
      <h1 class="readmore">LÝ DO NÊN CHỌN CHÚNG TÔI</h1>
      <div class="count_ld">
        <ul>
          <li>
            <img src="public/images/img-doingu.png" alt="">
            <h3>ĐỘI NGŨ CHUYÊN NGHIỆP</h3>
            <p>Với đội ngũ nhiều năm kinh nghiệm luôn lắng nghe, học hỏi, cập nhật xu hướng</p>
          </li>
          <li>
            <img src="public/images/img-banve.png" alt="">
            <h3>BẢN VẼ ĐẠT CHUẨN</h3>
            <p>Bản vẽ phù hợp với từng Khách Hàng - đạt tiêu chuẩn khi làm hồ sơ thi công</p>
          </li>
          <li>
            <img src="public/images/img-thietke.png" alt="">
            <h3>THIẾT KẾ</h3>
            <p>Trải nghiệm quy trình thiết kế nội thất chuyên nghiệp </p>
          </li>
        </ul>
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


  <div class="untree_co--site-section pb-0">
    <div class="container-fluid px-md-0">
      <div class="row justify-content-center text-center site-section pt-0">
        <div class="col-md-6">
          <h2 class="display-4" data-aos="fade-up">Dịch Vụ Thiết Kế Nội Thất NamViệt</h2>
          <p data-aos="fade-up" data-aos-delay="100">A hotel is an establishment that provides paid lodging on a
            short-term basis. Facilities provided may range from a modest-quality mattress </p>
        </div>
      </div>

      <div class="select_produc">
        <div class="row">
          <div class="col-xl-4 select_info">
            <div class="select_image" style=" background-image: url(public/images/tc-cua.jpg); background-size: cover;
                      background-position: center;
                      width: 100%;
                      height: 600px; ">
            </div>

            <div class="select_title">
              <ul>
                <h2>MẪU CỬA GỖ</h2>
                <?php
                  $show_service_lv2 = $sv -> show_service_lv2('1');
                  if($show_service_lv2){
                    while($result_service_lv2 = $show_service_lv2 -> fetch_assoc()){
                ?>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-chevron-right select_rigth" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg><a class="text-uppercase" href="dich-vu/<?php echo $result_service_lv2['slug'] ?>">thiết kế nội
                    thất
                    <?php echo $result_service_lv2['name'] ?></a></li>
                <?php } } ?>
              </ul>
            </div>
            <div class="select_contact">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-chevron-right select_rigth" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg><a href="lien-he">LIÊN HỆ BÁO GIÁ</a>
            </div>
          </div>
          <div class="col-xl-4 select_info">
            <div class="select_image" style=" background-image: url(public/images/tc-maylanh3.jpg); background-size: cover;
                      background-position: center;
                      width: 100%;
                      height: 600px; ">
            </div>
            <div class="select_title">
              <ul>
                <h2>THI CÔNG MÁY LẠNH</h2>
                <?php
                  $show_service_lv2 = $sv -> show_service_lv2('2');
                  if($show_service_lv2){
                    while($result_service_lv2 = $show_service_lv2 -> fetch_assoc()){
                ?>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-chevron-right select_rigth" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg><a class="text-uppercase"
                    href="dich-vu/<?php echo $result_service_lv2['slug'] ?>"><?php echo $result_service_lv2['name'] ?></a>
                </li>
                <?php } } ?>
              </ul>
            </div>
            <div class="select_contact ">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-chevron-right select_rigth" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg><a href="lien-he">LIÊN HỆ BÁO GIÁ</a>
            </div>
          </div>
          <div class="col-xl-4 select_info">
            <div class="select_image" style=" background-image: url(public/images/tc-ds2.jpg); background-size: cover;
                      background-position: center;
                      width: 100%;
                      height: 600px; ">
            </div>
            <div class="select_title">
              <ul>
                <h2>PHONG CÁCH THIẾT KẾ</h2>
                <?php
                  $show_service_lv2 = $sv -> show_service_lv2('3');
                  if($show_service_lv2){
                    while($result_service_lv2 = $show_service_lv2 -> fetch_assoc()){
                ?>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-chevron-right select_rigth" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <a class="text-uppercase" href="dich-vu/<?php echo $result_service_lv2['slug'] ?>">
                    <?php echo $result_service_lv2['name'] ?>
                  </a>
                </li>
                <?php } } ?>
              </ul>
            </div>
            <div class="select_contact">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-chevron-right select_rigth" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg><a href="lien-he">LIÊN HỆ BÁO GIÁ</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row no-gutters align-items-stretch room-animate site-section">
        <div class="col-md-7 img-wrap" data-jarallax-element="-100">
          <div class="bg-image h-100"
            style="background-color: #efefef; background-image: url('public/images/img-chungcu.jpg');">
            <div class="da-chitiet">
              <a href="">
                <span>Xem Thêm</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="row justify-content-center">
            <div class="col-md-8 py-5">
              <h3 class="display-4 heading">Thiết Kế Cửa Nam Việt</h3>
              <div class="room-exerpt">
                <p>Thiết Kế Nội Thất Chug Cư – Bạn đang phân vân không biết nên chọn phong cách thiết kế nội thất phòng
                  khách nào cho ngôi nhà của mình? . Dưới đây là danh sách tổng hợp các xu hướng thiết kế không gian tốt
                  nhất sẽ khiến cho ngôi nhà của bạn trở nên rực rỡ và tiện nghi. Có rất nhiều hình mẫu tham khảo cho
                  từng loại nội thất và vật dụng. Ngoài ra còn có các bố trí đặc trưng cho từng căn hộ lớn nhỏ khác
                  nhau.</p>
                <span style="color: black; font-size: 1rem; border-bottom: 1px solid black;">Những Điều Bạn Cần Lưu Ý Để
                  Có Thiết Kế Nội Thất Chung Cư Đẹp</span>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                          aria-expanded="true" aria-controls="collapseOne">
                          1. Tích hợp không gian chức năng trong chung cư.
                        </button>
                      </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        Nội thất chung cư thiết kế 2 phòng ngủ đẹp gia đình hoặc căn hộ đơn cho một người, gồm một khu
                        vực tiếp khách, phòng tắm, nhà bếp tách riêng phòng khách đối với chung cư 2 phòng ngủ sử dụng
                        phong cách tối giản nhất. Bởi vì diện tích của căn hộ chung cư tương đối hẹp nên việc thể tích
                        hợp của các tiện ích trong một không gian gồm phòng khách, phòng ăn hay nội thất phòng bếp thiết
                        kế hợp lý là vô cùng cần thiết và quan trọng của ngôi nhà, được xem là thiết kế thông minh vì
                        chúng vừa giúp làm cho không gian căn hộ rộng lớn vừa làm tăng tình cảm trong gia đình. </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                          aria-expanded="false" aria-controls="collapseTwo">
                          2. Sử dụng nội thất thông minh cho thiết kế căn hộ chung cư
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        Trong căn hộ chung cư đẹp, thường có diện tích trung bình, vì thế gia chủ nên lựa chọn nội thất
                        chung cư thiết kế đơn giản và có được tích hợp để tạo nên không gian nội thất gọn và đẹp mắt.
                        Sau đây là thiết kế nội thất mà gia chủ có thể ứng dụng phong cách này rất tối ưu:

                        - Thiết kế bàn ăn treo tường: Bàn ăn không những làm bàn ăn mà còn có thể biến thành bàn học khi
                        cần thiết. Một chiếc bàn 2 công dụng cực đa năng, giúp cho nội thất căn hộ của bạn được tận dụng
                        tối đa phải không nào?- Sử dụng giường đa năng: Những chiếc giường đa năng với nhiều tủ hộc bên
                        dưới tận dụng để cất giữ những món đồ cần thiết. Hoặc những chiếc giường gấp tiết kiệm không
                        gian, bình thường có thể gấp lại, cất đi để không gian sử dụng cho hoạt động khác như đọc sách,
                        làm việc, ....

                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                          aria-expanded="false" aria-controls="collapseThree">
                          3. Thiết kế nội thất phòng ngủ - nội thất chung cư
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        Là không gian nghỉ ngơi sinh hoạt riêng nên phòng ngủ được thiết kế theo sở thích của mỗi người
                        từ màu sắc tường, đến các vật dụng trang trí nội thất cần thiết. Giường ngủ, tủ quần áo, kệ là
                        những vật dụng không thể thiếu trong mỗi căn phòng ngủ. Bên cạnh đó tùy theo yêu cầu sử dụng của
                        mỗi cá nhân, ta có thể bố trí thêm bàn làm việc, đàn, tranh ảnh và kết hợp với những vật dụng
                        khác. Mẫu kiến trúc nội thất thi công chung cư cho phòng ngủ cũng phải theo thói quen sinh hoạt
                        của mỗi người và khoa học nhất có thể. </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-12">
                    <h3 class="mb-4">Tại Sao Bạn Nên Chọn Nam Việt?</h3>
                    <ul class="list-unstyled ul-check">
                      <li>Có >10 năm kinh nghiệm trong lĩnh vực Thiết kế – Xây dựng</li>
                      <li>Chất lượng hơn số lượng</li>
                      <li>Cam kết 100% sử dụng nguyên vật liệu đã báo giá</li>
                      <li>Chỉnh chu đến từng chi tiết</li>
                      <li>Có cam kết bảo hành sau xây dựng</li>
                      <li>
                        <a href="lien-he" style="color: black; font-size: 1rem; border-bottom: 1px solid black;">
                          Liên Hệ Báo Giá
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid px-md-0">
      <div class="row no-gutters align-items-stretch room-animate site-section">
        <div class="col-md-7 order-md-2 img-wrap" data-jarallax-element="-100">
          <div class="bg-image h-100"
            style="background-color: #efefef; background-image: url('public/images/tc-phongkhach.jpg');">
          </div>
        </div>
        <div class="col-md-5">
          <div class="row justify-content-center">
            <div class="col-md-8 py-5">
              <h3 class="display-4 heading">Thiết Kế Nội Thất Nhà Phố</h3>
              <div class="room-exerpt">
                <p>Thiết Kế Nội Thất Nhà Phố – Bạn đang phân vân không biết nên chọn phong cách thiết kế nội thất phòng
                  khách nào cho ngôi nhà của mình? . Dưới đây là danh sách tổng hợp các xu hướng thiết kế không gian tốt
                  nhất sẽ khiến cho ngôi nhà của bạn trở nên rực rỡ và tiện nghi. Có rất nhiều hình mẫu tham khảo cho
                  từng loại nội thất và vật dụng. Ngoài ra còn có các bố trí đặc trưng cho từng căn hộ lớn nhỏ khác
                  nhau.</p>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour"
                          aria-expanded="true" aria-controls="collapseFour">
                          Collapsible Group Item #1
                        </button>
                      </h5>
                    </div>

                    <div id="collapseFour" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                          aria-expanded="false" aria-controls="collapseFive">
                          Collapsible Group Item #2
                        </button>
                      </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                          aria-expanded="false" aria-controls="collapseSix">
                          Collapsible Group Item #3
                        </button>
                      </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mt-5">
                  <div class="col-12">
                    <h3 class="mb-4">Amenities</h3>
                    <ul class="list-unstyled ul-check">
                      <li>Có >10 năm kinh nghiệm trong lĩnh vực Thiết kế – Xây dựng</li>
                      <li>Chất lượng hơn số lượng</li>
                      <li>Cam kết 100% sử dụng nguyên vật liệu đã báo giá</li>
                      <li>Chỉnh chu đến từng chi tiết</li>
                      <li>Có cam kết bảo hành sau xây dựng</li>
                      <li>
                        <a href="lien-he" style="color: black; font-size: 1rem; border-bottom: 1px solid black;">
                          Liên Hệ Báo Giá
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid px-md-0">
      <div class="row no-gutters align-items-stretch room-animate site-section">
        <div class="col-md-7 img-wrap" data-jarallax-element="-100">
          <div class="bg-image h-100"
            style="background-color: #efefef; background-image: url('public/images/tc-phongkhach1.jpg');">
          </div>
        </div>
        <div class="col-md-5">
          <div class="row justify-content-center">
            <div class="col-md-8 py-5">
              <h3 class="display-4 heading">Chi phí điều hòa tổng cho gia đình.</h3>
              <div class="room-exerpt">
                <p>Chi phí điều hòa tổng cho gia đình phụ thuộc vào Loại thiết bị, Số lượng thiết bị, Độ dài hệ thống
                  kết nối và chi phí nhân công lắp đặt. Vì thế, muốn dự toán giá điều hòa tổng nhất định phải có thiết
                  kế trước hệ thống điều hòa trung tâm cho gia đình</p>

                <div class="row mt-5">
                  <div class="col-12">
                    <h3 class="mb-4"> Kinh nghiệm khi lắp đặt điều hòa</h3>

                    <div id="accordion">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven"
                              aria-expanded="true" aria-controls="collapseSeven">
                              1. Xác định vị trí lắp điều hòa trước khi hoàn thiện căn hộ
                            </button>
                          </h5>
                        </div>

                        <div id="collapseSeven" class="collapse show" aria-labelledby="headingOne"
                          data-parent="#accordion">
                          <div class="card-body">
                            Đối với các căn hộ chung cư thì các nhà thiết kế đã tính toán vị trí lắp đặt điều hòa như
                            nào. Và các đường dây điện của điều hòa chung cư thiết kế âm tường ra sao. Do đó, trước khi
                            xây dựng phải tính toán kỹ để đảm bảo thẩm mỹ. Hạn chế các trường hợp đục tường đi đường dây
                            lắp điều hòa ở chung cư. </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight"
                              aria-expanded="false" aria-controls="collapseEight">
                              2. Lựa chọn điều hòa có công suất phù hợp
                            </button>
                          </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body">
                            Để tính công suất điều hòa cho tất cả các mục đích sử dụng. Cần dựa vào các yếu tố như diện
                            tích, thể tích không gian cần làm lạnh. Thể tích làm lạnh là yếu tố chính được dùng để tính
                            toán công suất. Công suất của điều hòa thường được ghi theo đơn vị BTU/h (là năng suất lạnh
                            của máy). Người dùng không nên chọn điều hòa nhiệt độ thiếu công suất so với thể tích. Nhu
                            cầu sử dụng của căn phòng vì nhiệt độ không đủ lạnh sẽ buộc máy phải làm việc liên tục; dẫn
                            tới tốn điện do quá tải và máy nhanh hỏng. </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine"
                              aria-expanded="false" aria-controls="collapseNine">
                              3. Lắp đặt điều hòa phải đảm bảo thẩm mỹ
                            </button>
                          </h5>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            Lựa chọn dàn lạnh phù hợp với diện tích, cấu trúc, thẩm mỹ. Đặc biệt chức năng của từng
                            phòng rất quan trọng để đảm bảo hệ thống điều hòa hoạt động hiệu quả. Trên thị trường hiện
                            nay có loại điều hòa mới 1 dàn nóng kết nối nhiều dàn lạnh để tiết kiệm không gian lắp đặt.
                          </div>
                        </div>
                      </div>
                    </div>


                    <ul class="list-unstyled ul-check">
                      <li>Có >10 năm kinh nghiệm trong lĩnh vực Thiết kế – Xây dựng</li>
                      <li>Chất lượng hơn số lượng</li>
                      <li>Cam kết 100% sử dụng nguyên vật liệu đã báo giá</li>
                      <li>Chỉnh chu đến từng chi tiết</li>
                      <li>Có cam kết bảo hành sau xây dựng</li>
                      <li>
                        <a href="lien-he" style="color: black; font-size: 1rem; border-bottom: 1px solid black;">
                          Liên Hệ Báo Giá
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="video_perform">
      <div class="untree_co--site-section">
        <div class="container">
          <div class="row justify-content-center text-center pt-0 pb-5">
            <div class="col-lg-6 section-heading">
              <h3 class="text-center">Hình ảnh dự án</h3>
            </div>
          </div>
          <div class="row gutter-2">
            <div class="col-md-4" data-aos-delay="">
              <a href="public/images/tc-maylanh.jpg" data-fancybox="gallery">
                <img src="public/images/tc-maylanh.jpg" alt="Image" class="img-fluid" />
              </a>
            </div>
            <div class="col-md-4" data-aos-delay="100">
              <a href="public/images/tc-maylanh1.jpg" data-fancybox="gallery">
                <img src="public/images/tc-maylanh8.jpg" alt="Image" class="img-fluid" />
              </a>
            </div>
            <div class="col-md-4" data-aos-delay="100">
              <a href="public/images/tc-maylanh2.jpg" data-fancybox="gallery">
                <img src="public/images/tc-maylanh2.jpg" alt="Image" class="img-fluid" />
              </a>
            </div>
            <div class="col-md-12" data-aos-delay="200">
              <a href="public/images/tc-maylanh7.jpg" data-fancybox="gallery">
                <img src="public/images/tc-maylanh3.jpg" alt="Image" class="img-fluid" />
              </a>
            </div>
            <div class="col-md-3" data-aos-delay="">
              <a href="public/images/tc-maylanh5.jpg" data-fancybox="gallery">
                <img src="public/images/tc-maylanh5.jpg" alt="Image" class="img-fluid" />
              </a>
            </div>
            <div class="col-md-8" data-aos-delay="100">
              <a href="public/images/tc-maylanh6.jpg" data-fancybox="gallery">
                <img src="public/images/tc-maylanh6.jpg" alt="Image" class="img-fluid" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid px-md-0">
      <div class="row no-gutters align-items-stretch room-animate site-section pb-0">
        <div class="col-md-7 order-md-2 img-wrap" data-jarallax-element="-100">
          <div class="bg-image h-100"
            style="background-color: #efefef; background-image: url('public/images/img-quancf1.jpg');">
          </div>
        </div>
        <div class="col-md-5">
          <div class="row justify-content-center">
            <div class="col-md-8 py-5">
              <h3 class="display-4 heading">Thiết Kế Nội Thất Quán Cafe</h3>
              <div class="room-exerpt">
                <p>Thiết Kế Nội Thất Quán Cafe – Bạn đang phân vân không biết nên chọn phong cách thiết kế nội thất
                  phòng khách nào cho ngôi nhà của mình? . Dưới đây là danh sách tổng hợp các xu hướng thiết kế không
                  gian tốt nhất sẽ khiến cho ngôi nhà của bạn trở nên rực rỡ và tiện nghi. Có rất nhiều hình mẫu tham
                  khảo cho từng loại nội thất và vật dụng. Ngoài ra còn có các bố trí đặc trưng cho từng căn hộ lớn nhỏ
                  khác nhau.</p>
                <p>Tư vấn thiết kế nội thất miễn phí, Thi công nội thất giá xưởng tại TPHCM, Biên Hoà, Bình Dương, Long
                  An, Tây Ninh và Các tỉnh lân cận!</p>
                <div class="row mt-5">
                  <div class="col-12">
                    <h3 class="mb-4">Amenities</h3>
                    <ul class="list-unstyled ul-check">
                      <li>Có >10 năm kinh nghiệm trong lĩnh vực Thiết kế – Xây dựng</li>
                      <li>Chất lượng hơn số lượng</li>
                      <li>Cam kết 100% sử dụng nguyên vật liệu đã báo giá</li>
                      <li>Chỉnh chu đến từng chi tiết</li>
                      <li>Có cam kết bảo hành sau xây dựng</li>
                      <li><a href="" style="color: black; font-size: 1rem; border-bottom: 1px solid black;">Liên Hệ Báo
                          Giá. </a></li>

                    </ul>
                  </div>
                </div>
              </div>
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
        <div class="da-chitiet">
          <a href="">
            <span>Xem Thêm</span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="row justify-content-center">
        <div class="col-md-8 py-5">
          <h3 class="display-4 heading">Thiết Kế Nội Thất Cửa Hàng</h3>
          <div class="room-exerpt">
            <!-- <div class="room-price mb-4">$200<span class="per">/night</span></div> -->
            <p>Thiết Kế Nội Thất Chug Cư – Bạn đang phân vân không biết nên chọn phong cách thiết kế nội thất phòng
              khách nào cho ngôi nhà của mình? . Dưới đây là danh sách tổng hợp các xu hướng thiết kế không gian tốt
              nhất sẽ khiến cho ngôi nhà của bạn trở nên rực rỡ và tiện nghi. Có rất nhiều hình mẫu tham khảo cho từng
              loại nội thất và vật dụng. Ngoài ra còn có các bố trí đặc trưng cho từng căn hộ lớn nhỏ khác nhau.</p>
            <p>Nếu bạn đã, đang và sẽ kinh doanh nhà hàng thì bạn không nên xem nhẹ vấn đề đầu tư vào thiết kế nội thất
              nhà hàng đẹp, chuyên nghiệp và có phong cách của riêng mình. Bởi không gian nội thất là một trong những
              yếu tố quyết định đến sự thành công khi kinh doanh nhà hàng.</p>
            <div class="row mt-5">
              <div class="col-12">
                <h3 class="mb-4">Tại Sao Bạn Nên Chọn Nam Việt?</h3>
                <ul class="list-unstyled ul-check">
                  <li>Có >10 năm kinh nghiệm trong lĩnh vực Thiết kế – Xây dựng</li>
                  <li>Chất lượng hơn số lượng</li>
                  <li>Cam kết 100% sử dụng nguyên vật liệu đã báo giá</li>
                  <li>Chỉnh chu đến từng chi tiết</li>
                  <li>Có cam kết bảo hành sau xây dựng</li>
                  <li><a href="" style="color: black; font-size: 1rem; border-bottom: 1px solid black;">Liên Hệ Báo Giá.
                    </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="untree_co--site-section py-5 bg-body-darker cta">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h3 class="m-0 p-0">Mang lại vẻ đẹp tinh tế,sang trọng,Phòng làm việc kết hợp phòng khách. <a
              href="tel://0901579585">0901 579 585</a></h3>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>
<?php include 'inc/footer.php' ?>