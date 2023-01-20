<?php

class YandexPackage implements IPackage
{

    public function getConsist(): void
    {
        echo 'Проверяем состав посылки Yandex...' . PHP_EOL;
    }
}