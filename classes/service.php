<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath. '/../lib/database.php');
    include_once ($filepath. '/../helpers/format.php');
?>
<?php
    class service {
        private $db;
        private $fm;
        public function __construct() {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function insert_service($name,$slug){
            $name = $this->fm->validation($name);
            $slug = $this->fm->validation($slug);
            $name = mysqli_real_escape_string($this->db->link,$name);
            $slug = mysqli_real_escape_string($this->db->link,$slug);
            if(empty($name)) {
                $alert = "<span class='text-danger text-center'>Bạn hãy nhập tên dịch vụ vào</span>";
                return $alert;
            }else{
                $query = "INSERT INTO tbl_service(name,slug) VALUES('$name','$slug')";
                $result = $this->db->insert($query);
                if($result){
                    $alert= "<span class='text-success text-center'>Thêm dịch vụ thành công</span>";
                    return $alert;
                }else{
                    $alert= "<span class='text-danger text-center'>Thất bại</span>";
                    return $alert;

                }
            }
        }

        public function insert_service_lv2($name,$slug,$parent){
            $name = $this->fm->validation($name);
            $slug = $this->fm->validation($slug);
            $parent = $this->fm->validation($parent);
            $name = mysqli_real_escape_string($this->db->link,$name);
            $slug = mysqli_real_escape_string($this->db->link,$slug);
            $parent = mysqli_real_escape_string($this->db->link,$parent);
            if(empty($name)) {
                $alert = "<span class='text-danger text-center'>Bạn hãy nhập tên dịch vụ vào</span>";
                return $alert;
            }else{
                $query = "INSERT INTO tbl_service_lv2(name,slug,parent) VALUES('$name','$slug','$parent')";
                $result = $this->db->insert($query);
                if($result){
                    $alert= "<span class='text-success text-center'>Thêm dịch vụ thành công</span>";
                    return $alert;
                }else{
                    $alert= "<span class='text-danger text-center'>Thất bại</span>";
                    return $alert;

                }
            }
        }

        public function show_service(){
            $query = "SELECT * FROM tbl_service ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function show_service_lv2($parent = ''){
            if(!empty($parent)){
                $query = "SELECT * FROM tbl_service_lv2 WHERE parent = '$parent' ORDER BY parent , id DESC";
                $result = $this->db->select($query);
                return $result;
            }else{
                $query = "SELECT * FROM tbl_service_lv2 ORDER BY parent , id DESC";
                $result = $this->db->select($query);
                return $result;
            }
        }

        public function del_service($id) {
            $query = "DELETE FROM tbl_service WHERE id = '$id'";
            $result = $this->db->delete($query);
            if($result){
                $alert= "<span class='text-success text-center'>Đã xoá</span>";
                return $alert;
            }else{
                $alert= "<span class='text-danger text-center'>Xoá thất bại</span>";
                return $alert;
            }
        }

        public function del_service_lv2($id) {
            $query = "DELETE FROM tbl_service_lv2 WHERE id = '$id'";
            $result = $this->db->delete($query);
            if($result){
                $alert= "<span class='text-success text-center'>Đã xoá</span>";
                return $alert;
            }else{
                $alert= "<span class='text-danger text-center'>Xoá thất bại</span>";
                return $alert;
            }
        }

        public function update_service($name,$slug,$id) {
            $name = $this->fm->validation($name);
            $slug = $this->fm->validation($slug);
            $name = mysqli_real_escape_string($this->db->link,$name);
            $slug = mysqli_real_escape_string($this->db->link,$slug);
            $id = mysqli_real_escape_string($this->db->link,$id);
            if(empty($name)) {
                $alert = "<span class='text-danger text-center'>Sửa thất bại</span>";
                return $alert;
            }else{
                $query = "UPDATE tbl_service SET name = '$name',slug = '$slug' WHERE id='$id'";
                $result = $this->db->update($query);
                if($result){
                    header('location:add-service.php');
                }else{
                    $alert= "<span class='text-danger text-center'>Cập nhật thất bại</span>";
                    return $alert;
                }
            }
        }

        public function update_service_lv2($name,$slug,$id,$parent) {
            $name = $this->fm->validation($name);
            $slug = $this->fm->validation($slug);
            $parent = $this->fm->validation($parent);
            $name = mysqli_real_escape_string($this->db->link,$name);
            $slug = mysqli_real_escape_string($this->db->link,$slug);
            $id = mysqli_real_escape_string($this->db->link,$id);
            $parent = mysqli_real_escape_string($this->db->link,$parent);
            if(empty($name)) {
                $alert = "<span class='text-danger text-center'>Sửa thất bại</span>";
                return $alert;
            }else{
                $query = "UPDATE tbl_service_lv2 SET name = '$name',slug = '$slug', parent = '$parent' WHERE id='$id'";
                $result = $this->db->update($query);
                if($result){
                    header('location:add-service-lv2.php');
                }else{
                    $alert= "<span class='text-danger text-center'>Cập nhật thất bại</span>";
                    return $alert;
                }
            }
        }

        public function getservicebyId($id){
            $query = "SELECT * FROM tbl_service WHERE id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function get_service_lv2_by_Id($id){
            $query = "SELECT * FROM tbl_service_lv2 WHERE id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function get_name($parent_id) {
            $query = 
            "SELECT tbl_service_lv2.*,tbl_service.name, tbl_service.id
            FROM tbl_service_lv2,tbl_service
            WHERE tbl_service_lv2.parent = tbl_service.id
            AND tbl_service_lv2.parent = '$parent_id' ";
            $result = $this->db->select($query);
            return $result;
        }
    }
?>