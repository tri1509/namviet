<?php 
  $title = "Tìm kiếm sản phẩm";
  include 'inc/header.php' ;
?>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['s'])) {
  $tukhoa = $_POST['s'];
}
?>
<main class="untree_co--site-main">
  <div class="untree_co--site-hero inner-page min-h-20" .style="background-image: url('public/images/pn2.jpg')"></div>
  <div class="container">
    <div class="blog-section">
      <div class="setion-content blog">
        <div class="title w-100">
          <h2>Từ khoá tìm kiếm : <?php echo $tukhoa ?></h2>
        </div>
        <div class="cards">
          <?php
            $timkiem = $ps -> timkiem($tukhoa);
            if($timkiem) {
              while($result = $timkiem -> fetch_assoc()){
          ?>
          <div class="card">
            <div class="image-section">
              <a class="image-section-link" href="chi-tiet/<?php echo $result['slug'] ?>"
                title="<?php echo $result['name'] ?>"> <img src="public/images/<?php echo $result['img'] ?>" alt=""></a>
            </div>
            <div class="article">
              <h4><?php echo $result['name'] ?></h4>
              <p><?php 
                $rutgon = $fm -> textShorten($result['tomtat'],100); 
                echo $rutgon;
              ?></p>
            </div>
            <div class="blog-view">
              <a href="chi-tiet/<?php echo $result['slug'] ?>" title="<?php echo $result['name'] ?>">
                Xem chi tiết
              </a>
            </div>
          </div>
          <?php
            }}else{
              echo "<p class='sub-text'>Không tìm thấy sản phẩm</p>";
            }
          ?>
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