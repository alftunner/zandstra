<?php

namespace tasks;

class CourierShipping implements Shipping
{
    private string $name = 'Курьерская доставка';
    private float $cost;
    public function __construct($cost)
    {
        $this->cost = $cost;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function getName()
    {
        return $this->name;
    }
}