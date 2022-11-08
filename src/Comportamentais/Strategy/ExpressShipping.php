<?php

namespace DesignPatterns\Comportamentais\Strategy;

class ExpressShipping implements Shipping
{

    public function calculate(float $valueOfTheOrder): float
    {
        return $valueOfTheOrder * 0.1;
    }
}