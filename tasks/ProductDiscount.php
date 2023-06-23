<?php

namespace tasks;

class ProductDiscount
{
    public function __construct(private float $discountValue)
    {

    }
    public function applyDiscount(Order $order) : float
    {
        return $order->calculateTotalCost() * $this->discountValue;
    }
}