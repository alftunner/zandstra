<?php

class CallbackPractice
{
    public static function saleInfo($countProduct) : callable
    {
        $totalCount = 0;
        return function () use ($countProduct, &$totalCount)
        {
            $totalCount += $countProduct;
            if ($totalCount > $countProduct) {
                echo "Пора поднимать цены";
            }
        };
    }
}