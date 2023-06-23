<?php

class YandexDeliveryFactory implements IAbstractFactory
{

    public function createDeliveryService(): IDeliveryService
    {
        return new YandexDeliveryService();
    }

    public function createPackage(): IPackage
    {
        return new YandexPackage();
    }
}