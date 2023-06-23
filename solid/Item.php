<?php

namespace solid;

class Item
{

    public function __construct(private string $name, private float $price)
    {
    }

    public function getPrice()
    {
        return $this->price;
    }
}