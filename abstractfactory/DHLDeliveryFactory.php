<?php

class DHLDeliveryFactory implements IAbstractFactory
{

    public function createDeliveryService(): IDeliveryService
    {
        return new DHLDeliveryService();
    }

    public function createPackage(): IPackage
    {
        return new DHLPackage();
    }
}