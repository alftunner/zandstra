<?php
spl_autoload_register(function($name) {
    require 'classes/'.$name.'.php';
});

$dbconnect =DBConnection::getInstance();

$product = ShopProduct::getInstance(1,$dbconnect);
var_dump($product);