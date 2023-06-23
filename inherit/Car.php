<?php

namespace inherit;

class Car extends Vehicle
{

    public function __construct(string $brand, string $model, private string $type, private int $quantityWheel)
    {
        parent::__construct($brand, $model);
    }


    public function start()
    {
        echo "{$this->type} начинает стартовать";
    }

    public function stop()
    {
        echo "{$this->type} останавливается";
    }

    public function move()
    {
        echo "{$this->type} перемещается на {$this->quantityWheel} колесах";
    }
}