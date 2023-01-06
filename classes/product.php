<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath. '/../lib/database.php');
    include_once ($filepath. '/../helpers/format.php');
?>
<?php
    class product {
        private $db;
        private $fm;
        public function __construct() {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function del_product($id) {
            $query = "DELETE FROM tbl_product WHERE id = '$id'";
            $result = $this->db->delete($query);
            if($result){
                $alert= "<span class='text-success text-center'>Đã xoá</span>";
                return $alert;
            }else{
                $alert= "<span class='text-danger text-center'>lỗi</span>";
                return $alert;
            }
        }
        public function show_product(){
            $query = "SELECT * FROM tbl_product ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }
        public function insert_product($data,$files){
            $name = mysqli_real_escape_string($this->db->link, $data['name']);
            $slug = mysqli_real_escape_string($this->db->link,$data['slug']);
            $cat = mysqli_real_escape_string($this->db->link,$data['cat']);
            $desc = mysqli_real_escape_string($this->db->link,$data['desc']);
            $price = mysqli_real_escape_string($this->db->link,$data['price']);
            $quantity = mysqli_real_escape_string($this->db->link,$data['quantity']);
            $quantityfm = $this->fm->validation($quantity);
            $permited = array('jpg','jpeg','png','gif');
            $file_name = $_FILES['img']['name'];
            $file_size = $_FILES['img']['size'];
            $file_temp = $_FILES['img']['tmp_name'];

            $div = explode('.',$file_name );
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()),0,10).'.'.$file_ext;
            $uploaded_image = "../public/images/".$unique_image;
        
            move_uploaded_file($file_temp,$uploaded_image);
            $query = "INSERT INTO tbl_product(name,slug,cat,price,quantity,mota,img) VALUES('$name','$slug','$cat','$price','$quantityfm','$desc','$unique_image')";
            $result = $this->db->insert($query);
            if($result){
                $alert= "<span class='text-success text-center'>Thêm thành công</span>";
                return $alert;
            }else{
                $alert= "<span class='text-danger text-center'>Thất bại</span>" ;
                return $alert;
            }
        }
    }
?>