<?php

interface Chargeable
{
    public function getPrice() : int | float;
}