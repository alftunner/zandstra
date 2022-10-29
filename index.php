<?php
spl_autoload_register(function($name) {
    require 'classes/'.$name.'.php';
});

$test = new CdProduct("test", "test", "test", 13.2, 23);
print $test->getPlayLength();