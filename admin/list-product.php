<?php include 'inc/header.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/product.php';?>
<?php include_once '../helpers/format.php';?>
<?php
  $fm = new Format();
  $pd = new product();
  $pdlist = $pd -> show_product();
  if(isset($_GET['productid'])){
    $id = $_GET['productid'];
    $delpro = $pd->del_product($id);
  }
?>
<div id="page-body" class="d-flex">
  <?php include 'inc/sidebar.php';?>
  <div id="wp-content">
    <div id="content" class="container-fluid">
      <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
          <h5 class="m-0 ">Danh sách sản phẩm</h5>
          <div class="form-search form-inline">
            <form action="#">
              <input type="" class="form-control form-search" placeholder="Tìm kiếm">
              <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
            </form>
          </div>
        </div>
        <div class="card-body">
          <div class="analytic">
            <a href="" class="text-primary">Trạng thái 1<span class="text-muted">(10)</span></a>
            <a href="" class="text-primary">Trạng thái 2<span class="text-muted">(5)</span></a>
            <a href="" class="text-primary">Trạng thái 3<span class="text-muted">(20)</span></a>
          </div>
          <div class="form-action form-inline py-3">
            <select class="form-control mr-1" id="">
              <option>Chọn</option>
              <option>Tác vụ 1</option>
              <option>Tác vụ 2</option>
            </select>
            <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
          </div>
          <table class="table table-striped table-checkall">
            <thead>
              <tr>
                <th scope="col">
                  <input name="checkall" type="checkbox">
                </th>
                <th scope="col">#</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tác vụ</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                if($pdlist) {
                  $i=0;
                  while($resule = $pdlist -> fetch_assoc()){
                    $i++;
              ?>
              <tr class="">
                <td>
                  <input type="checkbox">
                </td>
                <td><?php echo $i ?></td>
                <td><img src="../public/images/<?php echo $resule['img'] ?>" alt="" width="80"></td>
                <td><a href="#"><?php echo $resule['name'] ?></a></td>
                <td><?php echo number_format($resule['price'])."đ" ?></td>
                <td><?php echo $resule['cat'] ?></td>
                <td><?php echo $resule['mota'] ?></td>
                <td><?php 
                  $tinhtrang = $resule['quantity'];
                  if($tinhtrang > 0){
                    echo "<span class='badge badge-success'>Còn hàng</span>";
                  }else{
                    echo "<span class='badge badge-dark'>Hết hàng</span>";
                  }
                ?>
                </td>
                <td>
                  <a href="#" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                    data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                  <a href="?productid=<?php echo $resule['id'] ?>" onclick="return confirm('Bạn có muốn xoá không?')"
                    class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                    data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">Trước</span>
                  <span class="sr-only">Sau</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'inc/footer.php';?>