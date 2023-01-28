<?php include 'inc/header.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/post.php';?>
<div id="wp-content">
  <?php
    $ps = new post();	
    $cat = new category();
    $list_cat = $cat -> show_cat_post();
    if(isset($_GET['postid']) && $_GET['postid']!=NULL){
        $id = $_GET['postid'];
    }
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
      $updatepost = $ps ->update_post($_POST,$_FILES,$id);
    }
  ?>
  <div id="content" class="container-fluid">
    <div class="card">
      <div class="card-header font-weight-bold">
        Chỉnh sửa bài viết
      </div>
      <?php if(isset($updatepost)){echo $updatepost ;}?>
      <div class="card-body">
        <?php
          $get_post_by_id = $ps -> get_post_by_id($id);
          if($get_post_by_id){
              while($result = $get_post_by_id->fetch_assoc()){
        ?>
        <form method="post" enctype="multipart/form-data" action="">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="name">Tên bài viết</label>
                <input class="form-control" type="text" name="name" id="slug" onkeyup="ChangeToSlug()"
                  value="<?php echo $result['name'] ?>">
              </div>
              <div class="form-group">
                <label for="name">Slug</label>
                <input class="form-control" type="text" name="slug" id="convert_slug"
                  value="<?php echo $result['slug'] ?>" readonly>
              </div>
              <div class="form-group">
                <label for="name">Content bài viết</label>
                <input class="form-control" type="text" name="content" id="content"
                  value="<?php echo $result['content'] ?>">
              </div>

            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="">Danh mục</label>
                <select class="form-control" id="category" name="cat">
                  <option>----Chọn danh mục----</option>
                  <?php
                  if($list_cat){
                      while($result_cat = $list_cat->fetch_assoc()){
                ?>
                  <option <?php 
                  if($result['cat'] === $result_cat['id']) {
                    echo "selected";
                  }
                ?> value="<?php echo $result_cat['id'] ?>"><?php echo $result_cat['name'] ?></option>
                  <?php }} ?>
                </select>
              </div>
              <div class="form-group">
                <label for="name">Tóm tắt bài viết</label>
                <input class="form-control" type="text" name="tomtat" id="tomtat"
                  value="<?php echo $result['tomtat'] ?>">
              </div>
              <div class="form-group">
                <label for="img">Hỉnh ảnh</label>
                <input class="form-control" type="text" name="img" id="img" value="<?php echo $result['img'] ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="intro">Nội dung bài viết</label>
            <textarea name="desc" class="ckeditor" id="intro"
              style="resize: none; height:200px"><?php echo $result['noidung'] ?></textarea>
          </div>
          <div class="form-group">
            <label for="">Trạng thái</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="status1" value="0"
                <?php if($result['status'] == 0){ echo "checked" ; } ?>>
              <label class="form-check-label" for="status1">
                Ẩn
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="status2" value="1"
                <?php if($result['status'] == 1){ echo "checked" ; } ?>>
              <label class="form-check-label" for="status2">
                Công khai
              </label>
            </div>
          </div>
          <img src="../public/images/<?php echo $result['img'] ?>" alt="" width="250"><br>
          <input type="submit" class="btn btn-primary" value="Cập nhật" name="submit">
        </form>
        <?php } } ?>
      </div>
    </div>
  </div>
</div>
<?php include 'inc/footer.php';?>