<?php

namespace Src\Product;

class Product
{
    private $code, $description, $price, $percentual, $moreExpensive;

    public function __construct($code, $description, $price, $percentual)
    {
        $this->setCode($code);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setPercentual($percentual);
        
        if($price > $this->moreExpensive){
            $this->moreExpensive = $price;
            $this->moreExpensiveProduct($code, $description, $price, $percentual);
        }
    }

    public function getCode()
    {
        return $this->code;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPercentual()
    {
        return $this->percentual;
    }
    public function setPercentual($percentual)
    {
        $this->percentual = $this->getPrice() * $percentual/100;
    }

    public function moreExpensiveProduct()
    {
        return [$this->code, $this->description, $this->price, $this->percentual];
    }
    
}