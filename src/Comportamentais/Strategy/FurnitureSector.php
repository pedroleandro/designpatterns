<?php

namespace DesignPatterns\Comportamentais\Strategy;

class FurnitureSector extends Order
{
    private string $sectorName;

    public function __construct(string $nameSector)
    {
        $this->sectorName = $nameSector;
    }

    /**
     * @return string
     */
    public function getSectorName(): string
    {
        return $this->sectorName;
    }

    /**
     * @param string $sectorName
     */
    public function setSectorName(string $sectorName): void
    {
        $this->sectorName = $sectorName;
    }

    public function calculateCommonShipping(): float
    {
        return $this->getValue() * 0.05;
    }

    public function calculateExpressShipping(): float
    {
        throw new \Exception("Frete expresso indisponível para o " . $this->getSectorName());
    }
}