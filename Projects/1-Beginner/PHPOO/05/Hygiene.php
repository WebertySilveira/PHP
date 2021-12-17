<?php 

class Hygiene extends Product
{
    
    public function __construct($code, $description, $price)
    {
        parent::__construct($code, $description, $price, 30);

        echo("Produto de Higiene Cadastrado! <br>");
    }

    public function showProduct()
    {
        echo("Código: " . parent::getCode() . "<br>");
        echo("Descrição: " . parent::getDescription() . "<br>");
        echo("Preço: " . parent::getPrice() . "<br>");
        echo("Lucro: " . parent::getPercentual(30) . "<br>");
    }

    public function moreExpensive()
    {
        return parent::moreExpensiveProduct();
    }
}