<?php

class CdProduct extends ShopProduct
{
    private int $playLength;
    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $playLength
    ) {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength() : int
    {
        return $this->playLength;
    }

    public function getSummaryLine() : string
    {
        return parent::getSummaryLine() . " : Время звучания - $this->playLength";
    }
}