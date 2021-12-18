<?php

require __DIR__ . "/vendor/autoload.php";

$type[0] = new \Src\Product\Type();
$type[0]->setCode(1);
$type[0]->setPercent(10);

$type[1] = new \Src\Product\Type();
$type[1]->setCode(2);
$type[1]->setPercent(20);

$product = new \Src\Product\Product();
$product->setDescription("Product 01");
$product->setPrice(50);
$product->setType($type[1]);

$final = $product->finalPrice();
echo($final);