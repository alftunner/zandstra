<?php

class TextProductWriter extends ShopProductWriter
{
    public function write(): void
    {
        $str = "Товары:\n";
        foreach ($this->products as $product) {
            $str .= $product->getSummaryLine() . "\n";
        }
        print $str;
    }
}