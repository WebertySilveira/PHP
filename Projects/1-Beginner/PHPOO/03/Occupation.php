<?php

class Occupation
{
    private $jobNumber, $hourlyValue;

    private function getJobNumber()
    {
        return $this->jobNumber;
    }
    private function setJobNumber($jobNumber)
    {
        $this->jobNumber = $jobNumber;
    }

    public function getHourlyValue()
    {
        return $this->hourlyValue;
    }
    private function setHourlyValue($hourlyValue)
    {
        $this->hourlyValue = $hourlyValue;
    }

    public function createOccupation($jobNumber, $hourlyValue)
    {
        $this->setJobNumber($jobNumber);
        $this->setHourlyValue($hourlyValue);
    }
}