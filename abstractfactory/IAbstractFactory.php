<?php

interface IAbstractFactory
{
    public function createDeliveryService() : IDeliveryService;
    public function createPackage() : IPackage;
}