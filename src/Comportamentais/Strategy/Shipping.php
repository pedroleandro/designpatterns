<?php

namespace DesignPatterns\Comportamentais\Strategy;

interface Shipping
{
    public function calculate(float $valueOfTheOrder): float;
}