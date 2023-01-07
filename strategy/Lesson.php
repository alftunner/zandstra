<?php

abstract class Lesson
{
    public function __construct(
        private int $duration,
        private CostStrategy $costStrategy
    ){}

    public function getDuration() : int
    {
        return $this->duration;
    }

    public function cost() : int
    {
        return $this->costStrategy->cost($this);
    }

    public function chargeType() : string
    {
        return $this->costStrategy->chargeType();
    }
}