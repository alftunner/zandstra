<?php
spl_autoload_register(function($name) {
    require 'classes/'.$name.'.php';
});


$student = new Student('Oleg', 22, 5, '1234');
$student1 = new Student('Nikolay', 23, 4, '1234');

$student->getStudentInfo();
$student1->getStudentInfo();