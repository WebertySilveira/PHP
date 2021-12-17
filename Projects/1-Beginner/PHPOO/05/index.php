<?php 

require_once "Product.php";
require_once "Medicine.php";
require_once "Hygiene.php";

function registerProduct($productType)
{
    if($productType == 1)
    {
        $medicine = new Medicine(001, 'Dipirona', 12, '12/12/12', 10);
        $medicine->showProduct();
    }else {
        $hygiene = new Hygiene(001, 'Papel', 12);
        $hygiene->showProduct();
        $expensive = $hygiene->moreExpensive();

        foreach($expensive as $value)
        {
            echo $value;
        }
    }
}


registerProduct(2);
