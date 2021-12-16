<?php

class Properties 
{
    private $owner, $sportsCourt, $batch, $area, $value, $situation, $commission;

    public function __construct($owner, $sportsCourt, $batch, $area, $value, $situation, $commission)
    {
        $this->setOwner($owner);
        $this->setSportsCourt($sportsCourt);
        $this->setBatch($batch);
        $this->setArea($area);
        $this->setValue($value);
        $this->setCommission($commission);
        $this->setSituation($situation);
    }

    public function getOwner()
    {
        return $this->owner;
    }
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    public function getSportsCourt()
    {
        return $this->sportsCourt;
    }
    public function setSportsCourt($sportsCourt)
    {
        $this->sportsCourt = $sportsCourt;
    }

    public function getBatch()
    {
        return $this->batch;
    }
    public function setBatch($batch)
    {
        $this->batch = $batch;
    }

    public function getArea()
    {
        return $this->area;
    }
    public function setArea($area)
    {
        $this->area = $area;
    }

    public function getValue()
    {
        return $this->value;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getSituation()
    {
        return $this->situation;
    }
    public function setSituation($situation)
    {
        if ($situation == 2) 
        {
            $this->setCommission(
                $this->getValue() * $this->getCommission() /100
            );
        }
        else
        {
            $this->setCommission(0);  
        }
    }

    public function getCommission()
    {
        return $this->commission;
    }
    public function setCommission($commission)
    {
        $this->commission = $commission;
    }
}