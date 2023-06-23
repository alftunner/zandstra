<?php

namespace inherit;

class ProcessProduct
{
    private array $callbacks = [];

    /**
     * @throws \Exception
     */
    public function registerCallback(callable $callback) : void
    {
        if (!is_callable($callback)) {
            throw new \Exception("невозможно вызвать данную функцию");
        }
        $this->callbacks[] = $callback;
    }

    public function sale(Product $product) : void
    {
        echo "Начинает обработка товара $product->name<br>";
        foreach ($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}