<?php

namespace DesignPatterns\Criacionais\AbstractFactory\BancoDoBrasil;

use DesignPatterns\Criacionais\AbstractFactory\Boleto;

class BancoDoBrasilBoleto10Dias extends Boleto
{
    public function __construct(float $valor)
    {
        parent::__construct($valor);
        $this->juros = 0.03;
        $this->desconto = 0.05;
        $this->multa = 0.02;
    }
}