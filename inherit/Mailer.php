<?php

namespace inherit;

class Mailer
{
    public function doMail(Product $product)
    {
        echo "Информация о товаре $product->name отправлена на почту клиенту<br>";
    }
}