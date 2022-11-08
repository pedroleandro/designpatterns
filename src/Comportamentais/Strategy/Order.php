<?php

namespace DesignPatterns\Comportamentais\Strategy;

abstract class Order
{

    private float $value;
    private Shipping $typeOfShipping;

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

    /**
     * @return Shipping
     */
    public function getTypeOfShipping(): Shipping
    {
        return $this->typeOfShipping;
    }

    /**
     * @param Shipping $typeOfShipping
     */
    public function setTypeOfShipping(Shipping $typeOfShipping): void
    {
        $this->typeOfShipping = $typeOfShipping;
    }

    public function calculateShipping(): float
    {
        return $this->getTypeOfShipping()->calculate($this->getValue());
    }

}