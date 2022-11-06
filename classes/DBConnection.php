<?php

class DBConnection
{
    use Singleton;
    private $user = 'root';
    private $pass = 'root';
    private function __construct()
    {
        self::$instance = new PDO('mysql:host=172.26.0.2;dbname=test', $this->user, $this->pass);
    }
}