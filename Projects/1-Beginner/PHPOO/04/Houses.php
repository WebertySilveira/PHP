<?php

require_once "Properties.php";

class Houses Extends Properties
{
    private $iptu;

    public function __construct($owner, $sportsCourt, $batch, $area, $value, $situation, $commission)
    {
        parent::__construct($owner, $sportsCourt, $batch, $area, $value, $situation, $commission);
        $this->setIptu($value);
    }

    public function getIptu()
    {
        return $this->iptu;
    }
    public function setIptu($value)
    {
        $this->iptu = $value * 2/100;
    }
}