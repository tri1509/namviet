<?php
function get_cat($cat_id = '') {
  if(!empty($cat_id)){
    $item = db_fetch_row("SELECT * FROM `tbl_category` WHERE cat_id ='$cat_id' ");
    return $item;
  }else{
    $item = db_fetch_array("SELECT * FROM `tbl_category`");
    return $item;
  }

}

function show_product($cat_id) {
  $item = db_fetch_array("SELECT * FROM `tbl_product` WHERE cat_id = '$cat_id' ");
  return $item;
}