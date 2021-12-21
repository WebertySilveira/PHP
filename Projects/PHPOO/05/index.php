<?php 

require __DIR__ . "/vendor/autoload.php";

function registerProduct($productType)
{
    if($productType == 1)
    {
        $medicine = new Src\Product\Medicine(001, 'Dipirona', 12, '12/12/12', 10);
        $medicine->showProduct();
    }else {
        $hygiene = new Src\Product\Hygiene(001, 'Papel', 12);
        $hygiene->showProduct();
        $expensive = $hygiene->moreExpensive();

        foreach($expensive as $value)
        {
            echo $value;
        }
    }
}


registerProduct(2);
