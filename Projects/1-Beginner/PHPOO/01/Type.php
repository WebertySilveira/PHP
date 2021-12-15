<?php
class Type{
    public $code, $percent;

    public function getCode()
    {
        return $this->code;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getPercent()
    {
        return $this->percent;
    }
    public function setPercent($percent)
    {
        $this->percent = $percent;
    }

}