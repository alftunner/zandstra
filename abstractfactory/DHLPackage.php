<?php

class DHLPackage implements IPackage
{

    public function getConsist(): void
    {
        echo 'Проверяем состав посылки DHL...' . PHP_EOL;
    }
}