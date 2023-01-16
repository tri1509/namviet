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
  $rand_banner = $ps -> rand_banner();
  if($rand_banner){
    $resule_banner = $rand_banner -> fetch_assoc();
  }
  $title = $resule['name'];
  include 'inc/header.php';
?>
<main class="untree_co--site-main">
  <div class="untree_co--site-hero inner-page"
    style="background-image: url('public/images/<?php echo $resule_banner['img'] ?>')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center">
          <div class="site-hero-contents" data-aos="fade-up">
            <h1 class="hero-heading text-white"><?php echo $title ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php 
  if ($resule['id'] == 19){
    echo $resule['noidung'];
  }else{
  ?>
  <div class="untree_co--site-section pb-0">
    <div class="video_perform">
      <div class="untree_co--site-section">
        <div class="container">
          <div class="row justify-content-center text-center pt-0 pb-5">
            <div class="col-lg-6 section-heading">
              <h3 class="text-center">
                <?php echo $title ?>
              </h3>
            </div>
          </div>
          <?php echo $resule['noidung'] ?>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
</main>
<?php include 'inc/footer.php' ?>