<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath. '/../lib/database.php');
    include_once ($filepath. '/../helpers/format.php');
?>
<?php
    class post {
        private $db;
        private $fm;

        public function __construct() {
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function show_post_noi_that(){
            $query = "SELECT * FROM tbl_post WHERE cat = 1 ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function show_post_tin_tuc(){
            $query = "SELECT * FROM tbl_post WHERE cat = 2 ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function get_post_by_id($id){
            $query = "SELECT * FROM tbl_post WHERE id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function update_post($data,$files,$id) {
            $name = mysqli_real_escape_string($this->db->link, $data['name']);
            $slug = mysqli_real_escape_string($this->db->link,$data['slug']);
            $cat = mysqli_real_escape_string($this->db->link,$data['cat']);
            $desc = mysqli_real_escape_string($this->db->link,$data['desc']);
            $tomtat = mysqli_real_escape_string($this->db->link,$data['tomtat']);
            $content = mysqli_real_escape_string($this->db->link,$data['content']);
            $img = mysqli_real_escape_string($this->db->link,$data['img']);
            // $permited = array('jpg','jpeg','png','gif');
            // $file_name = $_FILES['img']['name'];
            // $file_size = $_FILES['img']['size'];
            // $file_temp = $_FILES['img']['tmp_name'];
            // $div = explode('.',$file_name );
            // $file_ext = strtolower(end($div));
            // $unique_image = substr(md5(time()),0,10).'.'.$file_ext;
            // $uploaded_image = "../public/images/".$unique_image;
            // if(!empty($file_name)){
            //     move_uploaded_file($file_temp,$uploaded_image);
            //     unlink($unique_image);
            //     $query = "UPDATE tbl_post SET 
            //     name = '$name',
            //     slug = '$slug',
            //     cat = '$cat',
            //     tomtat = '$tomtat',
            //     content = '$content',
            //     noidung = '$desc',
            //     img = '$unique_image'
            //     WHERE id = '$id' ";
            // }else{
            //     $query = "UPDATE tbl_post SET 
            //     name = '$name',
            //     slug = '$slug',
            //     cat = '$cat',
            //     tomtat = '$tomtat',
            //     content = '$content',
            //     noidung = '$desc'
            //     WHERE id = '$id' ";
            // }
            $query = "UPDATE tbl_post SET 
                name = '$name',
                slug = '$slug',
                cat = '$cat',
                tomtat = '$tomtat',
                content = '$content',
                img = '$img',
                noidung = '$desc'
                WHERE id = '$id' ";
            $result = $this->db->update($query);
            if($result){
                header('location:list-post.php');
            }else{
                $alert= "<span class='text-danger text-center'>Thất bại</span>" ;
                return $alert;
            }
        }
        public function get_detail($slug){
            $query = "SELECT * FROM tbl_post WHERE slug = '$slug'";
            $result = $this->db->select($query);
            return $result;
        }
        public function del_post($id) {
            $query = "DELETE FROM tbl_post WHERE id = '$id'";
            $result = $this->db->delete($query);
            if($result){
                header('location:list-post.php');
            }else{
                $alert= "<span class='text-danger text-center'>lỗi</span>";
                return $alert;
            }
        }
        public function show_post(){
            $query = "SELECT * FROM tbl_post ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }
        public function insert_post($data,$files){
            $name = mysqli_real_escape_string($this->db->link, $data['name']);
            $slug = mysqli_real_escape_string($this->db->link,$data['slug']);
            $cat = mysqli_real_escape_string($this->db->link,$data['cat']);
            $desc = mysqli_real_escape_string($this->db->link,$data['desc']);
            $tomtat = mysqli_real_escape_string($this->db->link,$data['tomtat']);
            $content = mysqli_real_escape_string($this->db->link,$data['content']);
            $img = mysqli_real_escape_string($this->db->link,$data['img']);
            // $permited = array('jpg','jpeg','png','gif');
            // $file_name = $_FILES['img']['name'];
            // $file_size = $_FILES['img']['size'];
            // $file_temp = $_FILES['img']['tmp_name'];
            // $div = explode('.',$file_name );
            // $file_ext = strtolower(end($div));
            // $unique_image = substr(md5(time()),0,10).'.'.$file_ext;
            // $uploaded_image = "../public/images/".$unique_image;
            // move_uploaded_file($file_temp,$uploaded_image);
            $query = "INSERT INTO tbl_post(name,slug,cat,tomtat,content,noidung,img) VALUES('$name','$slug','$cat','$tomtat','$content','$desc','$img')";
            $result = $this->db->insert($query);
            if($result){
                header('location:list-post.php');
            }else{
                $alert= "<span class='text-danger text-center'>Thất bại</span>" ;
                return $alert;
            }
        }
    }
?>