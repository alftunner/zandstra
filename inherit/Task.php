<?php

namespace inherit;

class Task
{
    public string $status;
    public function __construct($status) {
        $this->status = $status;
    }
    public function speak()
    {
        return "Hello";
    }
}

