<?php

use Src\Easy\PalindromeCheck;
use Src\Easy\TwoSum;

require __DIR__ . "/vendor/autoload.php";

/**
 * TWO SUM
 *
 * O objetivo é identificar um par de números
 * que somados batam com o valor da variável target.
 */
$numbers = [4, 1, 2, -2, 11, 15, 1, -1, -6, -4];
$target = 9;

$TwoSum = new TwoSum();
echo $TwoSum->solutionOne($numbers, $target);

echo '<br>';

/**
 * Palindrome Check
 *
 * O Objetivo é receber uma string e identificar
 * Se ela é ou não uma palindrome (Tem a mesma sequencia
 * de caracteres ao ler de forma invertida)
 */
$palindromeCheck = new PalindromeCheck();
var_dump($palindromeCheck->solutionOne("gelo"));