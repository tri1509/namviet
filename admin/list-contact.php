<?php include 'inc/header.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/contact.php';?>
<?php include_once '../helpers/format.php';?>
<?php
  $fm = new Format();
  $ct = new contact();
  $ctlist = $ct -> show_contact();
  // if(isset($_GET['postid'])){
  //   $id = $_GET['postid'];
  //   $delpro = $ps ->del_post($id);
  // }
?>
<div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
      <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
        <h5 class="m-0 ">Chăm sóc khách hàng</h5>
        <div class="form-search form-inline">
          <form action="#">
            <input type="" class="form-control form-search" placeholder="Tìm kiếm">
            <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
          </form>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped table-checkall">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tên khách hàng</th>
              <th scope="col">Số điện thoại</th>
              <th scope="col">Lời nhắn</th>
              <th scope="col">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                if($ctlist) {
                  $i=0;
                  while($resule = $ctlist -> fetch_assoc()){
                    $i++;
              ?>
            <tr class="">
              <td><?php echo $i ?></td>
              <td><a href="#"><?php echo $resule['name'] ?></a></td>
              <td><?php echo $resule['phone'] ?></a></td>
              <td><?php echo $resule['message'] ?></td>
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
<?php include 'inc/footer.php';?>