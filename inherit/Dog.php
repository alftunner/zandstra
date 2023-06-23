<?php

namespace inherit;

class Dog extends Animal
{
    public string $kind;


    public function __construct(string $name, int $age, int $weight, int $height, string $kind)
    {
        parent::__construct($name, $age, $weight, $height);
        $this->kind = $kind;

    }

    public function __set($property, $value)
    {
        echo "prop: {$property}, val: {$value}";
    }

    protected function showVoice(): string
    {
        return "GAV";
    }

    public function showInfo(): string
    {
        return "Собака: $this->name<br> рост: $this->height<br> вес: $this->weight<br> возраст: $this->age говорит"
            . $this->showVoice();
    }
}