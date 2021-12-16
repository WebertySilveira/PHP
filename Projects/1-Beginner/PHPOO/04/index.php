<?php

require_once "Land.php";
require_once "Houses.php";


$values[] = '';
$commissions[] = '';
for ($i=0; $i < 5; $i++)
{
    $value = 50;
    $land[$i] = new Land("Weberty", "Sim", "200", "20m²", $value, 2, 10);
    $house[$i] = new Houses("Weberty", "Sim", "200", "20m²", $value, 2, 10);

    $values[$i] = $land[$i]->getValue() + $house[$i]->getValue();
    $commissions[$i] = $land[$i]->getCommission() + $house[$i]->getCommission();
}

var_dump($values);
echo("<br>");
echo(array_sum($values));

echo("<br>");
echo("<br>");
var_dump($commissions);
echo("<br>");
echo(array_sum($commissions));