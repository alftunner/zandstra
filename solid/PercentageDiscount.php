<?php

namespace solid;

class PercentageDiscount implements Discount
{
    public function __construct(private float $percentage)
    {
    }

    public function applyDiscount($total) : float
    {
        return $total * (1 - $this->percentage / 100);
    }
}