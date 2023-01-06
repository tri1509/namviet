<?php include 'inc/header.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/product.php';?>
<?php
	$pd = new product();		
	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
  $error = array();
    $alert = array();
    if(empty($_POST['name'])) {
      $error['name'] = "Vui lòng điền tên sản phẩm";
    }else{
      $name = $_POST['name'];
    }
    if(empty($_POST['desc'])) {
      $error['desc'] = "Vui lòng điền mô tả sản phẩm";
    }else{
      $desc = $_POST['desc'];
    }
    if(empty($_POST['price'])) {
      $error['price'] = "Vui lòng điền giá sản phẩm";
    }else{
      $price = $_POST['price'];
    }
    if(empty($_POST['quantity'])) {
      $error['quantity'] = "Vui lòng điền số lượng sản phẩm";
    }else{
      $quantity = $_POST['quantity'];
    }
    if(empty($_POST['cat'])) {
      $error['cat'] = "Vui lòng chọn danh mục sản phẩm";
    }else{
      $cat = $_POST['cat'];
    }
    $slug = $_POST['slug'];
    if(empty($error)){
      $data = array(
        'name' => $name,
        'cat' => $cat,
        'price' => $price,
        'quantity' => $quantity,
        'desc' => $desc,
        'slug' => $slug,
      );
      $insertProduct = $pd->insert_product($data,$_FILES);
    }
  }
?>
<div id="page-body" class="d-flex">
  <?php include 'inc/sidebar.php';?>
  <div id="wp-content">
    <div id="content" class="container-fluid">
      <div class="card">
        <div class="card-header font-weight-bold">
          Thêm sản phẩm
        </div>
        <?php if(isset($insertProduct)){echo $insertProduct ;} ?>
        <div class="card-body">
          <form method="post" enctype="multipart/form-data" action="add-product.php">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="name">Tên sản phẩm</label>
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
                  <label for="name">Giá</label>
                  <input class="form-control" type="text" name="price" id="price"
                    value="<?php if(!empty($price)){echo $price;}?>">
                  <span class='text-danger'>
                    <?php if(!empty($error['price'])) {echo $error['price'];} ?>
                  </span>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="intro">Mô tả sản phẩm</label>
                  <textarea name="desc" class="form-control" id="intro"
                    style="resize: none; height:200px"><?php if(!empty($desc)){echo $desc;}?></textarea>
                  <span class='text-danger'>
                    <?php if(!empty($error['desc'])) {echo $error['desc'];} ?>
                  </span>
                </div>
                <div class="form-group">
                  <label for="intro">Số lượng</label>
                  <input type="number" name="quantity" class="form-control"
                    value="<?php if(!empty($quantity)){echo $quantity;}?>">
                  <span class='text-danger'>
                    <?php if(!empty($error['quantity'])) {echo $error['quantity'];} ?>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="">Danh mục</label>
              <select class="form-control" id="category" name="cat">
                <option>----Chọn danh mục----</option>
                <?php
                  $cat = new category();
                  $list_cat = $cat -> show_category();
                  if($list_cat){
                      while($result = $list_cat->fetch_assoc()){
                ?>
                <option value="<?php echo $result['cat_id'] ?>"><?php echo $result['cat_name'] ?></option>
                <?php }} ?>
              </select>
              <span class='text-danger'>
                <?php if(!empty($error['cat'])) {echo $error['cat'];} ?>
              </span>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Tải ảnh lên</span>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" name="img">
                <label class="custom-file-label" for="inputGroupFile01">Chọn file</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Thêm mới" name="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'inc/footer.php';?>