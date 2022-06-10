<?php

/**
 * Declarações de tipo de retorno
 * Especificam o tipo do valor que será retornado por uma função.
 */

function arraysSum(array ...$arrays): array
{
    return array_map(function(array $array): int {
        return array_sum($array);
    }, $arrays);
}
print_r(arraysSum([1,2,3], [4,5,6], [7,8,9]));



/**
 * Operador de coalescência nula
 * Ele retorna o primeiro operando se este existir e não for null;
 * caso contrário retorna o segundo operando.
 */

$username = $_GET['user'] ?? 'nobody';
// Equivalente:
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';