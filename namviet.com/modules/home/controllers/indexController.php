<?php

function construct() {  
    load('helper','format');
    load_model('index');
}

function indexAction() {
    load_view('index');
}