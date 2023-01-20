<?php

require_once 'autoloader.php';

$lessons[] = new Seminar(4, new FixedCostStrategy());
$lessons[] = new Lecture(4, new TimeCostStrategy());

foreach ($lessons as $lesson) {
    echo $lesson->cost() . " | " . $lesson->chargeType();
}
