<?php

class ShopProductWriter
{
    private $products = [];

    public function addProduct(ShopProduct $product)
    {
        $this->products[] = $product;
    }

    public function write()
    {
        $str = "";
        foreach ($this->products as $product) {
            $str .= "{$product->getTitle()}: ";
            $str .= $product->getProducer();
            $str .= " ({$product->getPrice()}) <br>\n";
        }
        echo $str;
    }
}