<?php include 'inc/header.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/post.php';?>
<?php include_once '../helpers/format.php';?>
<?php
  $fm = new Format();
	$cat = new category();
  $ps = new post();
  $pslist = $ps -> show_post();
  if(isset($_GET['postid'])){
    $id = $_GET['postid'];
    $delpro = $ps ->del_post($id);
  }
?>
<div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
      <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
        <h5 class="m-0 ">Danh sách bài viết</h5>
      </div>
      <div class="card-body">
        <table class="table table-striped table-checkall" id="table-admin">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Ảnh</th>
              <th scope="col">Tên bài viết</th>
              <th scope="col">Đường dẫn</th>
              <th scope="col">Danh mục</th>
              <th scope="col">Content</th>
              <th scope="col">Nội dung</th>
              <th scope="col">Ngày viết</th>
              <th scope="col">Trạng thái</th>
              <th scope="col">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                if($pslist) {
                  $i=0;
                  while($resule = $pslist -> fetch_assoc()){
                    $i++;
              ?>
            <tr class="">
              <td><?php echo $i ?></td>
              <td><img src="../public/images/<?php echo $resule['img'] ?>" alt="" width="80"></td>
              <td><?php echo $resule['name'] ?></td>
              <td><?php echo $resule['slug'] ?></td>
              <td><?php
                $cat_id = $resule['cat'];
                $namebycat = $cat -> post_get_name_by_cat($cat_id);
                if($namebycat) {
                $result_name = $namebycat -> fetch_assoc();
                echo $result_name['name'];
              }
              ?></td>
              <td><?php echo $resule['content'] ?></td>
              <td><?php
            $htmlspecialchars = $fm -> textShorten($resule['noidung'],100);
            echo htmlspecialchars($htmlspecialchars) ?></td>
              <td><?php echo $resule['times'] ?></td>
              <td><?php 
                $status = $resule['status'];
                if($status == 0){
                  echo "Ẩn";
                }else{
                  echo "Công khai";
                } ?></td>
              <td>
                <a href="edit-post.php?postid=<?php echo $resule['id'] ?>"
                  class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                  data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                <a href="?postid=<?php echo $resule['id'] ?>" onclick="return confirm('Bạn có muốn xoá không?')"
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
<?php include 'inc/footer.php';?>