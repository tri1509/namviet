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
  $title = $resule['name'];
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

  <?php 
  echo $resule['noidung'] ;
  ?>
</main>
<?php include 'inc/footer.php' ?>