<?php

use DesignPatterns\Comportamentais\Strategy\CommonShipping;
use DesignPatterns\Comportamentais\Strategy\EletronicSector;
use DesignPatterns\Comportamentais\Strategy\ExpressShipping;

require_once __DIR__ . '/../../vendor/autoload.php';

$order = new EletronicSector("Setor de Eletrônicos");
$order->setValue(100);

$commonShipping = new CommonShipping();
$expressShipping = new ExpressShipping();

$order->setTypeOfShipping($commonShipping);
echo "Fretes para o pedido no valor de R$ " . number_format($order->getValue(), "2", ",", ".") . "</br>";
echo "Frete Comum: R$ " . number_format($order->calculateShipping(), "2", ",", ".") . "</br>";
