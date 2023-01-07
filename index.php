<?php
spl_autoload_register(function ($name) {
    if (file_exists('classes/' . $name . '.php')) {
        require 'classes/' . $name . '.php';
    } elseif (file_exists('strategy/' . $name . '.php')) {
        require 'strategy/' . $name . '.php';
    }
});

$lessons[] = new Seminar(4, new FixedCostStrategy());
$lessons[] = new Lecture(4, new TimeCostStrategy());

foreach ($lessons as $lesson) {
    echo $lesson->cost() . " | " . $lesson->chargeType();
}

/*$saleProcess = new SaleProcess();
$product = new BookProduct('test', 'Test', 'Testov', 15.2, 10);
$saleProcess->registerCallbacks(CallbackPractice::saleInfo(2));
$saleProcess->useThisCallbacks($product);
$saleProcess->useThisCallbacks($product);*/


//$pdo = DBConnection::getInstance();
//$test = ShopProduct::getInstance(1, $pdo);