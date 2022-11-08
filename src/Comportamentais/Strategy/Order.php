<?php

namespace DesignPatterns\Comportamentais\Strategy;

class Order
{

    private float $value;

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    public function calculateCommonShipping(): float
    {
        return $this->value * 0.05;
    }

    public function calculateExpressShipping(): float
    {
        return $this->value * 0.1;
    }

}