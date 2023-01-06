<?php

class DBConnection
{
    use Singleton;
    private $user = 'root';
    private $pass = 'root';

    /**
     * @throws Exception
     */
    private function __construct()
    {
        try {
            self::$instance = new PDO('mysql:host=172.18.0.2;dbname=test', $this->user, $this->pass);
        } catch (\Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }
}