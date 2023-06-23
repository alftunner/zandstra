<?php

namespace solid;

class ShoppingCart
{
    private array $items;
    public function addItem($item) : void
    {
        $this->items[] = $item;
    }

    public function removeItem($item) : void
    {
        $index = array_search($item, $this->items);
        if ($index !== false) {
            array_splice($this->items, $index, 1);
        }
    }

    public function getTotalPrice() : float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }
}