<?php

namespace solid;

class DiscountableShoppingCart extends ShoppingCart
{
    private array $discounts;

    public function addDiscount(Discount $discount) : void
    {
        $this->discounts[] = $discount;
    }

    public function getTotalPrice() : float
    {
        $total = parent::getTotalPrice();
        foreach ($this->discounts as $discount) {
            $total = $discount->applyDiscount($total);
        }
        return $total;
    }
}