<?php

namespace DesignPatterns\Comportamentais\Strategy;

class CommonShipping implements Shipping
{

    public function calculate(float $valueOfTheOrder): float
    {
        return $valueOfTheOrder * 0.05;
    }
}