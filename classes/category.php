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

        public function insert_cat_post($catName,$slug){
            $catName = $this->fm->validation($catName);
            $slug = $this->fm->validation($slug);
            $catName = mysqli_real_escape_string($this->db->link,$catName);
            $slug = mysqli_real_escape_string($this->db->link,$slug);
            if(empty($catName)) {
                $alert = "<span class='text-danger text-center'>Bạn hãy nhập danh mục vào</span>";
                return $alert;
            }else{
                $query = "INSERT INTO tbl_cat_post(name,slug) VALUES('$catName','$slug')";
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
            $query = "SELECT * FROM tbl_category ORDER BY cat_id DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function show_cat_post(){
            $query = "SELECT * FROM tbl_cat_post ORDER BY position DESC";
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

        public function del_cat_post($id) {
            $query = "DELETE FROM tbl_cat_post WHERE id = '$id'";
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
                    header('location:cat-product.php');
                }else{
                    $alert= "<span class='text-danger text-center'>Cập nhật thất bại</span>";
                    return $alert;
                }
            }
        }

        public function update_cat_post($catName,$slug,$id) {
            $catName = $this->fm->validation($catName);
            $slug = $this->fm->validation($slug);
            $catName = mysqli_real_escape_string($this->db->link,$catName);
            $slug = mysqli_real_escape_string($this->db->link,$slug);
            $id = mysqli_real_escape_string($this->db->link,$id);
            if(empty($catName)) {
                $alert = "<span class='text-danger text-center'>Sửa thất bại</span>";
                return $alert;
            }else{
                $query = "UPDATE tbl_cat_post SET name = '$catName',slug = '$slug' WHERE id='$id'";
                $result = $this->db->update($query);
                if($result){
                    header('location:cat-post.php');
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

        public function getcatpostbyId($id){
            $query = "SELECT * FROM tbl_cat_post WHERE id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function get_name_by_cat($cat_id) {
            $query = 
            "SELECT tbl_product.*,tbl_category.cat_name, tbl_category.cat_id
            FROM tbl_product,tbl_category
            WHERE tbl_product.cat = tbl_category.cat_id
            AND tbl_product.cat = '$cat_id' ";
            $result = $this->db->select($query);
            return $result;
        }

        public function post_get_name_by_cat($cat_id) {
            $query = 
            "SELECT tbl_post.*,tbl_cat_post.name, tbl_cat_post.id
            FROM tbl_post,tbl_cat_post
            WHERE tbl_post.cat = tbl_cat_post.id
            AND tbl_post.cat = '$cat_id' ";
            $result = $this->db->select($query);
            return $result;
        }
    }
?>