<?php

use DesignPatterns\Comportamentais\Strategy\EletronicSector;
use DesignPatterns\Comportamentais\Strategy\FurnitureSector;

require_once __DIR__ . '/../../vendor/autoload.php';

$order = new EletronicSector("Setor de Eletrônicos");
$order->setValue(100);

echo "Fretes para o pedido no valor de R$ " . number_format($order->getValue(), "2", ",", ".") . "</br>";
echo "Frete Comum: R$ " . number_format($order->calculateCommonShipping(), "2", ",", ".") . "</br>";
echo "Frete Expresso: R$ " . number_format($order->calculateExpressShipping(), "2", ",", ".") . "</br>";

echo "</br></br>";

$order = new FurnitureSector("Setor de Móveis");
$order->setValue(100);

echo "Fretes para o pedido no valor de R$ " . number_format($order->getValue(), "2", ",", ".") . "</br>";
echo "Frete Comum: R$ " . number_format($order->calculateCommonShipping(), "2", ",", ".") . "</br>";

try {
    echo "Frete Expresso: R$ " . number_format($order->calculateExpressShipping(), "2", ",", ".") . "</br>";
} catch (Exception $e) {
    echo $e->getMessage();
}