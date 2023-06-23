<?php

namespace inherit;

class Totalizer
{
    public static function doWarning(float $limit)
    {
        $total = 0;
        return function (Product $product) use ($limit, &$total) {
            $total += $product->price;
            if ($total >= $limit) {
                echo "Внимание! Порог превышен, сумма уже $total<br>";
            }
        };
    }
}