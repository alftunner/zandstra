<?php

abstract class ShopProductWriter
{
    protected array $products = [];

    public function addProduct(ShopProduct $product) : void
    {
        $this->products[] = $product;
    }

    abstract public function write() : void;
}