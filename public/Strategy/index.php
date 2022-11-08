<?php

use DesignPatterns\Comportamentais\Strategy\Order;

require_once __DIR__ . '/../../vendor/autoload.php';

$order = new Order();
$order->setValue(100);

echo "Fretes para o pedido no valor de R$ " . number_format($order->getValue(), "2", ",", ".") . "</br>";
echo "Frete Comum: R$ " . number_format($order->calculateCommonShipping(), "2", ",", ".") . "</br>";
echo "Frete Expresso: R$ " . number_format($order->calculateExpressShipping(), "2", ",", ".") . "</br>";