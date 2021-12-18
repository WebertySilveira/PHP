<?php

require __DIR__ . "/vendor/autoload.php";

$type[0] = new \Src\Product\Type();
$type[0]->setCode(1);
$type[0]->setPercent(10);

$type[1] = new \Src\Product\Type();
$type[1]->setCode(2);
$type[1]->setPercent(20);

$average[1] = 0;
for ($i=1; $i <= 5; $i++) 
{ 
    $product[$i] = new Src\Product\Product();
    $product[$i]->setDescription("Product {$i}");
    $product[$i]->setPrice(50);
    $product[$i]->setType($type[0]);
    echo("{$product[$i]->getDescription()} - {$product[$i]->finalPrice()} </br>");

    $average[$i] = $product[$i]->finalPrice();
}

$average = array_sum($average)/count($average);
echo($average);