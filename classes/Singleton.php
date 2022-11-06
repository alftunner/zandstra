<?php

trait Singleton
{
    public static $instance;
    private function __construct() {}
    public static function getInstance()
    {
        if (self::$instance == null) {
            new static();
        }
        return self::$instance;
    }
}