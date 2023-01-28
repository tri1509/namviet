<?php include 'inc/header.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/post.php';?>
<?php
	$ps = new post();		
	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
  $error = array();
    $alert = array();
    if(empty($_POST['name'])) {
      $error['name'] = "Vui lòng điền tên bài viết";
    }else{
      $name = $_POST['name'];
    }
    if(empty($_POST['desc'])) {
      $error['desc'] = "Vui lòng điền nội dung bài viết";
    }else{
      $desc = $_POST['desc'];
    }
    if(empty($_POST['tomtat'])) {
      $error['tomtat'] = "Vui lòng điền tóm tắt bài viết";
    }else{
      $tomtat = $_POST['tomtat'];
    }
    if(empty($_POST['img'])) {
      $error['img'] = "Vui lòng nhập hình ảnh bài viết";
    }else{
      $img = $_POST['img'];
    }
    if(empty($_POST['content'])) {
      $error['content'] = "Vui lòng điền content bài viết";
    }else{
      $content = $_POST['content'];
    }
    if(empty($_POST['cat'])) {
      $error['cat'] = "Vui lòng chọn danh mục bài viết";
    }else{
      $cat = $_POST['cat'];
    }
    $slug = $_POST['slug'];
    if(empty($error)){
      $data = array(
        'name' => $name,
        'cat' => $cat,
        'tomtat' => $tomtat,
        'content' => $content,
        'desc' => $desc,
        'slug' => $slug,
        'img' => $img,
        'status' => $status
      );
      $insertPost = $ps->insert_post($data,$_FILES);
    }
  }
?>
<div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
      <div class="card-header font-weight-bold">
        Thêm bài viết
      </div>
      <?php if(isset($insertPost)){echo $insertPost ;} ?>
      <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="add-post.php">
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="name">Tiêu đề bài viết</label>
                <input class="form-control" type="text" name="name" id="slug" onkeyup="ChangeToSlug()"
                  value="<?php if(!empty($name)){echo $name;}?>">
                <span class='text-danger'>
                  <?php if(!empty($error['name'])) {echo $error['name'];} ?>
                </span>
              </div>
              <div class="form-group">
                <label for="name">Slug</label>
                <input class="form-control" type="text" name="slug" id="convert_slug" readonly>
              </div>
              <div class="form-group">
                <label for="content">Content bài viết</label>
                <input class="form-control" type="text" name="content"
                  value="<?php if(!empty($content)){echo $content;}?>">
                <span class='text-danger'>
                  <?php if(!empty($error['content'])) {echo $error['content'];} ?>
                </span>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="">Danh mục bài viết</label>
                <select class="form-control" name="cat">
                  <option>----Chọn danh mục----</option>
                  <?php
                $cat = new category();
                $list_cat = $cat -> show_cat_post();
                if($list_cat){
                  while($result = $list_cat->fetch_assoc()){
              ?>
                  <option value="<?php echo $result['id'] ?>"><?php echo $result['name'] ?></option>
                  <?php }} ?>
                </select>
                <span class='text-danger'>
                  <?php if(!empty($error['cat'])) {echo $error['cat'];} ?>
                </span>
              </div>
              <div class="form-group">
                <label for="tomtat">Tóm tắt bài viết</label>
                <input class="form-control" type="text" name="tomtat"
                  value="<?php if(!empty($tomtat)){echo $tomtat;}?>">
                <span class='text-danger'>
                  <?php if(!empty($error['tomtat'])) {echo $error['tomtat'];} ?>
                </span>
              </div>
              <div class="form-group">
                <label for="img">Hình ảnh</label>
                <input class="form-control" type="text" name="img" value="<?php if(!empty($img)){echo $img;}?>">
                <span class='text-danger'>
                  <?php if(!empty($error['img'])) {echo $error['img'];} ?>
                </span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="intro">Nội dung bài viết</label>
            <textarea name="desc" class="ckeditor"><?php if(!empty($desc)){echo $desc;}?></textarea>
            <span class='text-danger'>
              <?php if(!empty($error['desc'])) {echo $error['desc'];} ?>
            </span>
          </div>
          <div class="form-group">
            <label for="">Trạng thái</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="status1" value="0">
              <label class="form-check-label" for="status1">
                Ẩn
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="status2" value="1" checked>
              <label class="form-check-label" for="status2">
                Công khai
              </label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary" value="Thêm mới" name="submit">
        </form>
      </div>
    </div>
  </div>
</div>
<?php include 'inc/footer.php';?>