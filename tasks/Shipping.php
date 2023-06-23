<?php

namespace tasks;

interface Shipping
{
    public function getCost();
    public function getName();
}