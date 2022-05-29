<?php


$teste = [0 => 3, 1 => 2, 2 => 5, 3 => 2, 4 => 1, 5 => 5];

for ($atual2 = 0; $atual2 <= count($teste) - 1; $atual2++) {
    $menor = menor($teste, $atual2);

    $atualOrd = $teste[$atual2];
    $menorOrd = $teste[$menor];

    $teste[$atual2] = $menorOrd;
    $teste[$menor] = $atualOrd;
}

function menor($teste, $atual2)
{
    $menor = $atual2;
    for ($atual = $atual2; $atual <= count($teste) - 1; $atual++) {
        if ($teste[$atual] < $teste[$menor]) {
            $menor = $atual;
        }
    }

    return $menor;
}

var_dump($teste);