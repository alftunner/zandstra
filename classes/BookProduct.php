<?php

class BookProduct extends ShopProduct
{
    private int $numPages;

    public function __construct(string $title, string $firstName, string $mainName, float $price, int $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    public function getNumberOfPages() : int
    {
        return $this->numPages;
    }

    public function getSummaryLine() : string
    {
        return parent::getSummaryLine() . " : Количество страниц - $this->numPages";
    }
}