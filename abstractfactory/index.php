<?php

require_once '../autoloader.php';

//Клиентский код сервиса доставки
function delivery(array $factories) : void
{
    foreach ($factories as $factory) {
        // Получаем сервис доставки
        $deliveryService = $factory->createDeliveryService();
        // Получаем посылку
        $package = $factory->createPackage();
        // Проверяем посылку
        $package->getConsist();
        // Отправляем посылку
        $deliveryService->sendPackage($package);
    }
}

$factories = [
    new DHLDeliveryFactory(),
    new YandexDeliveryFactory(),
    new DHLDeliveryFactory(),
    new YandexDeliveryFactory(),
];
 delivery($factories);