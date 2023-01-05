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
        public function show_product(){
            $query = "SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC";
            $result = $this->db->select($query);
            return $result;
        }
        public function getproduct($id){
            $query = "SELECT * FROM tbl_sanpham WHERE sanpham_id = '$id' LIMIT 1";
            $result = $this->db->select($query);
            return $result;
        }
        public function getinformation($id) {
            $query ="SELECT * FROM tbl_sanpham WHERE brand_id = '$id' ";
            $result = $this->db->select($query);
            return $result;
        }
    }
?>