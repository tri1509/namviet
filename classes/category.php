<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath. '/../lib/database.php');
    include_once ($filepath. '/../helpers/format.php');
?>
<?php
    class category {
        private $db;
        private $fm;
        public function __construct() {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function insert_category($catName,$slug){
            $catName = $this->fm->validation($catName);
            $slug = $this->fm->validation($slug);
            $catName = mysqli_real_escape_string($this->db->link,$catName);
            $slug = mysqli_real_escape_string($this->db->link,$slug);
            if(empty($catName)) {
                $alert = "<span class='text-danger text-center'>Bạn hãy nhập danh mục vào</span>";
                return $alert;
            }else{
                $query = "INSERT INTO tbl_category(cat_name,slug) VALUES('$catName','$slug')";
                $result = $this->db->insert($query);
                if($result){
                    $alert= "<span class='text-success text-center'>Thêm danh mục thành công</span>";
                    return $alert;
                }else{
                    $alert= "<span class='text-danger text-center'>Thất bại</span>";
                    return $alert;

                }
            }
        }

        public function show_category(){
            $query = "SELECT * FROM tbl_category ORDER BY cat_id ASC";
            $result = $this->db->select($query);
            return $result;
        }

        public function del_category($id) {
            $query = "DELETE FROM tbl_category WHERE cat_id = '$id'";
            $result = $this->db->delete($query);
            if($result){
                $alert= "<span class='text-success text-center'>Đã xoá</span>";
                return $alert;
            }else{
                $alert= "<span class='text-danger text-center'>Xoá thất bại</span>";
                return $alert;
            }
        }

        public function update_category($catName,$slug,$id) {
            $catName = $this->fm->validation($catName);
            $slug = $this->fm->validation($slug);
            $catName = mysqli_real_escape_string($this->db->link,$catName);
            $slug = mysqli_real_escape_string($this->db->link,$slug);
            $id = mysqli_real_escape_string($this->db->link,$id);
            if(empty($catName)) {
                $alert = "<span class='text-danger text-center'>Sửa thất bại</span>";
                return $alert;
            }else{
                $query = "UPDATE tbl_category SET cat_name = '$catName',slug = '$slug' WHERE cat_id='$id'";
                $result = $this->db->update($query);
                if($result){
                    $alert= "<span class='text-success text-center'>Đã cập nhật</span>";
                    return $alert;
                }else{
                    $alert= "<span class='text-danger text-center'>Cập nhật thất bại</span>";
                    return $alert;
                }
            }
        }

        public function getcatbyId($id){
            $query = "SELECT * FROM tbl_category WHERE cat_id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }
    }
?>