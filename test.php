<?php
try {
    $connection = new \PDO("mysql:host=" . "172.18.0.1" . ";dbname=" . "test". ";port=" . "52087",
        'root', 'root');
} catch (\PDOException $exception) {
    var_dump($exception);
}
