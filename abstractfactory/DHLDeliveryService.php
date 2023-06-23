<?php

class DHLDeliveryService implements IDeliveryService
{

    public function sendPackage(IPackage $package): void
    {
        echo 'Отправляем посылку через DHL...' . PHP_EOL;
    }
}