<?php

namespace solid;

interface Discount
{
    public function applyDiscount($total);
}