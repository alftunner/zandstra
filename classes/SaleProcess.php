<?php

class SaleProcess
{
    private array $callbacks;
    public function registerCallbacks(callable $callback) : void
    {
        $this->callbacks[] = $callback;
    }

    public function useThisCallbacks(ShopProduct $product) : void
    {
        foreach ($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}