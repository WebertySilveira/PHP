<?php

require __DIR__ . "/vendor/autoload.php";

/**
 * TWO SUM
 *
 * O objetivo é identificar um par de números
 * que somados batam com o valor da variável target.
 */
$numbers = [4, 1, 2, -2, 11, 15, 1, -1, -6, -4];
$target = 9;

$TwoSum = new \Src\Easy\TwoSum();
echo $TwoSum->solutionOne($numbers, $target);