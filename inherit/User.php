<?php

namespace inherit;

class User
{
    private $id;
    public function __construct(private string $name, private int $age)
    {

    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function setID(int $id)
    {
        $this->id = $id;
    }

    public function __clone()
    {
        $this->id = 0;
    }

    public function __toString()
    {
        return "name: {$this->name}, age: {$this->age}";
    }
}