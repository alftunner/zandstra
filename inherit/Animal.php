<?php

namespace inherit;

abstract class Animal
{
    protected string $name;
    protected int $age;
    protected int $weight;
    protected int $height;


    public function __construct(string $name, int $age, int $weight, int $height)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
        $this->height = $height;
    }

    public function setWeight(int $weight) : void
    {
        $this->weight = $weight;
    }

    public function getWeight() : int
    {
        return $this->weight;
    }

    abstract protected function showVoice() : string;
    abstract public function showInfo() : string;
}