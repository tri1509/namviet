<?php

function check_login($username, $password) {
    $check_login = db_num_rows("SELECT * FROM `tbl_users` WHERE
    `password` = '{$password}' AND 
    `username` = '{$username}'");
    if($check_login > 0)
        return true;
    return false;
}

// function is_login() {
//     if(isset($_SESSION['is_login']))
//     return true;
// return false;
// }

function info_user($field = 'id') {
    $user_login = $_SESSION['user_login'];
    $user = db_fetch_array("SELECT * FROM `tbl_users` WHERE `username` = '{$user_login}' ");
    return $user[$field];
}

function add_user($data){
    return db_insert('tbl_users',$data);
}

function user_exists($username,$email){
    $check_user = db_num_rows("SELECT * FROM `tbl_users` WHERE
    `email` = '{$email}' OR 
    `username` = '{$username}'");
    if ($check_user > 0){
            return true;
        return false;
    }
}

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `tbl_users`");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `id` = {$id}");
    return $item;
}

function active_user($active_token){
    $item = db_update('tbl_users', array('is_active' => 1),"active_token = '{$active_token}' ");
    return $item;
}

function check_active_token($active_token) {
    $check_active_token = db_num_rows("SELECT * FROM `tbl_users` WHERE
    `active_token` = '{$active_token}' AND `is_active`= '0' ");
    if ($check_active_token > 0){
            return true;
        return false;
    }
}

function user_login(){
    if(!empty($_SESSION['user_login']))
        return $_SESSION['user_login'];
    return false;
}

function check_email($email) {
    $check_email = db_num_rows("SELECT * FROM `tbl_users` WHERE
    `email` = '{$email}' ");
    if ($check_email > 0){
            return true;
        return false;
    }
}

function update_reset_token($data,$email) {
    db_update('tbl_users',$data," `email` = '{$email}' ");
}

function check_reset_token($reset_token) {
    $check_reset_token = db_num_rows("SELECT * FROM `tbl_users` WHERE
    `reset_token` = '{$reset_token}' ");
    
    if ($check_reset_token > 0){
        return true;
    return false;
    }
}

function update_pass($data,$reset_token) {
    db_update('tbl_users',$data," `reset_token` = '{$reset_token}' ");
}