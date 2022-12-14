<?php

namespace DesignPatterns\Criacionais\AbstractFactory\Caixa;

use DesignPatterns\Criacionais\AbstractFactory\Banco;
use DesignPatterns\Criacionais\AbstractFactory\Boleto;

class BancoCaixa extends Banco
{
    protected function criarBoleto(int $vencimentoBoleto, float $valor): Boleto
    {
        switch ($vencimentoBoleto) {
            case 10;
                return new BancoCaixaBoleto10Dias($valor);
            case 30;
                return new BancoCaixaBoleto30Dias($valor);
            case 60;
                return new BancoCaixaBoleto60Dias($valor);
            default:
                throw new \Exception('Vencimento Indisponível');
        }
    }
}
