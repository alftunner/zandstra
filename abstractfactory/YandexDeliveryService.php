<?php

class YandexDeliveryService implements IDeliveryService
{

    public function sendPackage(IPackage $package): void
    {
        echo 'Отправляем посылку через Yandex...' . PHP_EOL;
    }
}