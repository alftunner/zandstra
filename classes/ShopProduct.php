<?php

class ShopProduct
{
    private $title;
    private $firstName;
    private $mainName;
    protected $price;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price
    )
    {
        $this->title = $title;
        $this->firstName = $firstName;
        $this->mainName = $mainName;
        $this->price = $price;
    }

    public function getProducer() : string
    {
        return $this->firstName . ' ' . $this->mainName;
    }

    public function getSummaryLine() : string
    {
        return "$this->title ($this->firstName $this->mainName)";
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getTitle()
    {
        return $this->title;
    }
}