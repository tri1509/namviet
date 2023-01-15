<?php include 'inc/header.php';?>
<?php include '../classes/category.php';?>
<?php
	$cat = new category();
	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
		$catName = $_POST['name'];
		$slug = $_POST['slug'];
		$insertCatPost = $cat -> insert_cat_post($catName,$slug);
	}
  
  if(isset($_GET['delid']) && $_GET['delid']!=NULL){
    $id = $_GET['delid'];
    $delCat = $cat->del_cat_post($id);
  }

  if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit'])) {
    $catName = $_POST['editcatName'];
		$slug = $_POST['editslug'];
    $id = $_GET['catid'];
    $updateCat = $cat -> update_cat_post($catName,$slug,$id);
  }
?>
<div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="row">
      <div class="col-4">
        <?php if(isset($_GET['catid']) && $_GET['catid']!=NULL){
          $id = $_GET['catid'];
          $get_cate_name = $cat->getcatpostbyId($id);
          $result = $get_cate_name->fetch_assoc();
        ?>
        <div class="card">
          <div class="card-header font-weight-bold">
            Chỉnh sửa danh mục
          </div>
          <?php if(isset($updateCat)){echo $updateCat ;}?>
          <div class="card-body">
            <form method="post" action="">
              <div class="form-group">
                <label for="name">Sửa tên danh mục</label>
                <input class="form-control" type="text" name="editcatName" id="slug" onkeyup="ChangeToSlug()"
                  value="<?php echo $result['name'] ?>">
              </div>
              <div class="form-group">
                <label for="name">Slug</label>
                <input class="form-control" type="text" name="editslug" id="convert_slug" readonly
                  value="<?php echo $result['slug'] ?>">
              </div>
              <input type="submit" name="edit" Value="Cập nhật" class="btn btn-primary">
            </form>
          </div>
        </div>
        <?php }else{ ?>
        <div class="card">
          <div class="card-header font-weight-bold">
            Thêm danh mục bài viết
          </div>
          <?php if(isset($insertCatPost)) {echo $insertCatPost ; } ?>
          <div class="card-body">
            <form method="post">
              <div class="form-group">
                <label for="name">Tên danh mục bài viết</label>
                <input class="form-control" type="text" name="name" id="slug" onkeyup="ChangeToSlug()">
              </div>
              <div class="form-group">
                <label for="name">Slug</label>
                <input class="form-control" type="text" name="slug" id="convert_slug" readonly>
              </div>
              <!-- <div class="form-group">
                  <label for="">Trạng thái</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                      value="option1">
                    <label class="form-check-label" for="exampleRadios1">
                      Ẩn
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                      value="option2" checked>
                    <label class="form-check-label" for="exampleRadios2">
                      Công khai
                    </label>
                  </div>
                </div> -->
              <input type="submit" name="add" Value="Thêm vào" class="btn btn-primary">
            </form>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="col-8">
        <div class="card">
          <div class="card-header font-weight-bold">
            Danh sách
          </div>
          <div class="card-body">
            <?php if(isset($delCat)) {echo $delCat ; } ?>
            <table class="table table-striped" id="DataTable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tên</th>
                  <th scope="col">Đường dẫn</th>
                  <th scope="col">Tác vụ</th>
                </tr>
              </thead>
              <tbody class="order_position">
                <?php
                    $show_cat_post = $cat -> show_cat_post();
                    if($show_cat_post){
                      $i=0; 
                        while($result = $show_cat_post->fetch_assoc()){
                          $i++;
                  ?>
                <tr id="<?php echo $result['id'] ?>">
                  <th scope="row"><?php echo $i ?></th>
                  <td><?php echo $result['name'] ?></td>
                  <td><?php echo $result['slug'] ?></td>
                  <td>
                    <a href="?catid=<?php echo $result['id'] ?>" class="btn btn-success btn-sm rounded-0 text-white"
                      type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i
                        class="fa fa-edit"></i></a>
                    <a href="?delid=<?php echo $result['id'] ?>" onclick="return confirm('bạn có muốn xoá không?')"
                      class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                      data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <?php } } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'inc/footer.php';?>