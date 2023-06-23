<?php

interface IDeliveryService
{
    public function sendPackage(IPackage $package) : void;
}