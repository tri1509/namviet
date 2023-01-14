<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath. '/../lib/database.php');
    include_once ($filepath. '/../helpers/format.php');
?>
<?php
    class contact {
        private $db;
        private $fm;
        public function __construct() {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function del_contact($id) {
            $id = mysqli_real_escape_string($this->db->link, $id);
            $query = "DELETE FROM tbl_contact WHERE id ='$id' ";
            $result = $this->db->delete($query);
            if($result){
                echo "<meta http-equiv='refresh' content='0;url=list-contact.php'>";
            }else{
                $mgs = "<span class='text-danger text-center'>Thất bại</span>";
                return $mgs;
            }
        }
        public function check_contact($checkid,$time){
            $checkid = mysqli_real_escape_string($this->db->link, $checkid);
            $time = mysqli_real_escape_string($this->db->link, $time);
            $query = "UPDATE tbl_contact SET status = '1' WHERE id ='$checkid' AND times = '$time' ";
            $result = $this->db->update($query);
            if($result){
                echo "<meta http-equiv='refresh' content='0;url=list-contact.php'>";
            }else{
                $mgs = "<span class='text-danger text-center'>Thất bại</span>";
                return $mgs;
            }
        }
        public function show_contact(){
            $query = "SELECT * FROM tbl_contact ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }
        public function insert_contact($data){
            $name = mysqli_real_escape_string($this->db->link, $data['name']);
            $phone = mysqli_real_escape_string($this->db->link,$data['phone']);
            $message = mysqli_real_escape_string($this->db->link,$data['message']);
            $check = "SELECT * FROM tbl_contact WHERE name = '$name' OR phone = '$phone' LIMIT 1";
            $resultcheck = $this->db->select($check);
            if($resultcheck){
                $alert= "<span class='text-info text-center'>Cảm ơn bạn đã phản hồi với chúng tôi</span>" ;
                return $alert;
            }else{
                $query = "INSERT INTO tbl_contact(name,phone,message) VALUES('$name','$phone','$message')";
                $result = $this->db->insert($query);
                if($result){
                    header('location:loi-cam-on');
                }else{
                    $alert= "<span class='text-danger text-center'>Thất bại</span>" ;
                    return $alert;
                }
            }
        }
    }
?>