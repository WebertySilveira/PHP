<?php

class Product
{
    private $description, $type, $price, $tax;

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getType()
    {
        return $this->type;
    }
    public function setType(Type $type)
    {
        $this->type = $type;
        $percent = $this->type->getPercent();
        
        $this->setTax($this->price * $percent/100);
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