<?php

function construct() {
    load('helper','format');
    load_model('index');
}

function indexAction() {
    if(isset($_GET['catid'])){
        $cat_id = (int) $_GET['catid'];
    }else{
        $cat_id = "";
    }
    
    if(!empty($cat_id)) {
        $show_product = show_product($cat_id);
        $data['show_product'] = $show_product;
        $get_cat_name = get_cat($cat_id);
        $data['get_cat_name'] = $get_cat_name;
        load_view('showCat',$data);
    }else {
        $list_cat = get_cat();
        $data['list_cat'] = $list_cat;
        $show_product = show_product($cat_id);
        $data['show_product'] = $show_product;
        load_view('index',$data);
    }
}