<?php 

namespace Src\Product;

class Medicine extends Product
{
    private $due;

    public function __construct($code, $description, $price, $due, $percentual)
    {
        $this->setDue($due);
        parent::__construct($code, $description, $price, $percentual);

        echo("Remédio Cadastrado! <br>");
    }

    public function getDue()
    {
        return $this->due;
    }

    public function setDue($due)
    {
        $this->due = $due;
    }

    public function showProduct()
    {
        echo("Código: " . parent::getCode() . "<br>");
        echo("Descrição: " . parent::getDescription() . "<br>");
        echo("Preço: " . parent::getPrice() . "<br>");
        echo("Lucro: " . parent::getPercentual() . "<br>");
    }
}