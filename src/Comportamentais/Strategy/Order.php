<?php

namespace DesignPatterns\Comportamentais\Strategy;

abstract class Order
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

    abstract public function calculateCommonShipping(): float;

    abstract public function calculateExpressShipping(): float;

}