<?php

namespace Src\Product;

class Product
{
    private $description, $price, $tax;

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setType(Type $type)
    {
        $this->setTax($this->price * $type->getPercent()/100);
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getTax()
    {
        return $this->tax;
    }
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    public function FinalPrice()
    {
        return $this->price + $this->tax;
    }
}