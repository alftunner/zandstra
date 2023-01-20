<?php

spl_autoload_register(function ($name) {
    if (file_exists('classes/' . $name . '.php')) {
        require 'classes/' . $name . '.php';
    } elseif (file_exists('strategy/' . $name . '.php')) {
        require 'strategy/' . $name . '.php';
    } elseif (file_exists('../abstractfactory/' . $name . '.php')) {
        require '../abstractfactory/' . $name . '.php';
    }
});