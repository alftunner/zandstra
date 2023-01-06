<?php
spl_autoload_register(function($name) {
    require 'classes/'.$name.'.php';
});

$saleProcess = new SaleProcess();
$product = new BookProduct('test', 'Test', 'Testov', 15.2, 10);
$saleProcess->registerCallbacks(CallbackPractice::saleInfo(2));
$saleProcess->useThisCallbacks($product);
$saleProcess->useThisCallbacks($product);


//$pdo = DBConnection::getInstance();
//$test = ShopProduct::getInstance(1, $pdo);