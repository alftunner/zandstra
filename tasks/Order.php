<?php

namespace tasks;

class Order
{
    private array $products = [];
    private float $shippingCost = 0;
    public function __construct(array $products = [])
    {
        if (!empty($products)) {
            foreach ($products as $product) {
                if ($product instanceof Product) {
                    $this->products[] = $product;
                } else {
                    throw new \Exception('Массив должен содержать в качестве элементов только объекты типа Product');
                }
            }
        }
    }
    public function addProduct(Product $product) : string
    {
        $this->products[] = $product;
        return "Добавлен товар " . $product->getName() . " в количестве " . $product->getQuantity() . "<br>";
    }
    public function deleteProduct(string $productName) : string
    {
        foreach ($this->products as $index => $product)
        {
            if ($product->getName() == $productName) {
                unset($this->products[$index]);
                return "Удален товар" . $product->getName() . " в количестве " . $product->getQuantity() . "<br>";
            }
        }
        return "Нет товара в заказе с именем $productName";
    }
    public function selectShipping(Shipping $shipping)
    {
        $this->shippingCost = $shipping->getCost();
        return "Выбрана доставка " . $shipping->getName();
    }
    public function calculateTotalCost() : float
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice() * $product->getQuantity();
        }
        return $total + $this->shippingCost;
    }
}