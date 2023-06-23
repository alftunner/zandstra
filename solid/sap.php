<?php

/*Принцип устойчивости абстракций для компонентов гласит, что компоненты верхнего уровня не должны
зависеть от деталей реализации компонентов нижнего уровня. Вместо этого, оба уровня должны зависеть от абстракций.
*/

// Абстракция нижнего уровня (интерфейс или абстрактный класс)
interface StorageInterface
{
    public function save($data);
}

// Компонент нижнего уровня (конкретная реализация абстракции)
class DatabaseStorage implements StorageInterface
{
    public function save($data)
    {
        // Логика сохранения данных в базе данных
        // ...
    }
}

// Компонент нижнего уровня (конкретная реализация абстракции)
class FileStorage implements StorageInterface
{
    public function save($data)
    {
        // Логика сохранения данных в файл
        // ...
    }
}

// Компонент верхнего уровня (зависит от абстракции)
class DataManager
{
    private $storage;

    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function processData($data)
    {
        // Обработка данных
        // ...

        // Сохранение данных с использованием абстракции
        $this->storage->save($data);
    }
}

// Использование компонентов
$databaseStorage = new DatabaseStorage();
$dataManager = new DataManager($databaseStorage);
$dataManager->processData($data);

$fileStorage = new FileStorage();
$dataManager = new DataManager($fileStorage);
$dataManager->processData($data);

/* классы DatabaseStorage и FileStorage представляют конкретные реализации абстракции StorageInterface,
которая определяет метод save(). Класс DataManager представляет компонент верхнего уровня, который зависит от абстракции
StorageInterface и может использовать любую реализацию абстракции для сохранения данных.

Таким образом, компоненты верхнего уровня (как DataManager) могут работать с абстракцией StorageInterface,
не завися от конкретных реализаций нижнего уровня (как DatabaseStorage или FileStorage).
Это обеспечивает устойчивость абстракций и позволяет легко изменять или добавлять новые реализации без изменения
компонентов верхнего уровня.*/