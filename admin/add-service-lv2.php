<?php include 'inc/header.php';?>
<?php include '../classes/service.php';?>
<?php
	$sv = new service();
	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
		$name = $_POST['name'];
		$slug = $_POST['slug'];
		$parent = $_POST['parent'];
		$insertService = $sv -> insert_service_lv2($name,$slug,$parent);
	}
  
  if(isset($_GET['delid']) && $_GET['delid']!=NULL){
    $id = $_GET['delid'];
    $delService = $sv->del_service_lv2($id);
  }

  if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit'])) {
    $name = $_POST['editname'];
		$slug = $_POST['editslug'];
		$parent = $_POST['parent'];
    $id = $_GET['sv_id'];
    $updateService = $sv -> update_service_lv2($name,$slug,$id,$parent);
  }
?>
<div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="row">
      <div class="col-4">
        <?php if(isset($_GET['sv_id']) && $_GET['sv_id']!=NULL){
          $id = $_GET['sv_id'];
          $getservicelv2byId = $sv -> get_service_lv2_by_Id($id);
          $result = $getservicelv2byId ->fetch_assoc();
        ?>
        <div class="card">
          <div class="card-header font-weight-bold">
            Chỉnh sửa dịch vụ
          </div>
          <?php if(isset($updateService)){echo $updateService ;}?>
          <div class="card-body">
            <form method="post" action="">
              <div class="form-group">
                <label for="name">Sửa tên dịch vụ</label>
                <input class="form-control" value="<?php echo $result['name'] ?>" type="text" name="editname" id="slug"
                  onkeyup="ChangeToSlug()">
              </div>
              <div class="form-group">
                <label for="name">Slug</label>
                <input class="form-control" type="text" name="editslug" id="convert_slug" readonly
                  value="<?php echo $result['slug'] ?>">
              </div>
              <div class="form-group">
                <label for="">Chọn dịch vụ cha</label>
                <select class="form-control" name="parent">
                  <?php
                    $show_service = $sv -> show_service();
                    if($show_service){
                        while($results = $show_service->fetch_assoc()){
                  ?>
                  <option <?php 
                  if($result['parent'] === $results['id']) {
                    echo "selected";
                  }
                ?> value="<?php echo $results['id'] ?>"><?php echo $results['name'] ?></option>
                  <?php }} ?>
                </select>
              </div>
              <input type="submit" name="edit" Value="Cập nhật" class="btn btn-primary">
            </form>
          </div>
        </div>
        <?php }else{ ?>
        <div class="card">
          <div class="card-header font-weight-bold">
            Các loại dịch vụ
          </div>
          <?php if(isset($insertService)) {echo $insertService ; } ?>
          <div class="card-body">
            <form method="post">
              <div class="form-group">
                <label for="name">Tên dịch vụ</label>
                <input class="form-control" type="text" name="name" id="slug" onkeyup="ChangeToSlug()">
              </div>
              <div class="form-group">
                <label for="name">Slug</label>
                <input class="form-control" type="text" name="slug" id="convert_slug" readonly>
              </div>
              <div class="form-group">
                <label for="">Chọn dịch vụ cha</label>
                <select class="form-control" name="parent">
                  <option>----Chọn dịch vụ cha----</option>
                  <?php
                    $show_service = $sv -> show_service();
                    if($show_service){
                      $i=0; 
                        while($result = $show_service->fetch_assoc()){
                  ?>
                  <option value="<?php echo $result['id'] ?>"><?php echo $result['name'] ?></option>
                  <?php }} ?>
                </select>
              </div>
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
            <?php if(isset($delService)){ echo $delService ; }  ?>
            <table class="table table-striped" id="DataTable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tên</th>
                  <th scope="col">Parent</th>
                  <th scope="col">Đường dẫn</th>
                  <th scope="col">Tác vụ</th>
                </tr>
              </thead>
              <tbody class="order_position">
                <?php
                    $show_service_lv2 = $sv -> show_service_lv2();
                    if($show_service_lv2){
                      $i=0; 
                        while($result = $show_service_lv2 -> fetch_assoc()){
                          $i++;
                  ?>
                <tr id="<?php echo $result['id'] ?>">
                  <th scope="row"><?php echo $i ?></th>
                  <td><?php echo $result['name'] ?></td>
                  <td>
                    <?php 
                      $parent_id = $result['parent'];
                      $name = $sv -> get_name($parent_id);
                      if($name) {
                      $result_name = $name -> fetch_assoc();
                      echo $result_name['name'];
                      } ?>
                  </td>
                  <td><?php echo $result['slug'] ?></td>
                  <td>
                    <a href="?sv_id=<?php echo $result['id'] ?>" class="btn btn-success btn-sm rounded-0 text-white"
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