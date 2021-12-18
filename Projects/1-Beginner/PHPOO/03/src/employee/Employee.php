<?php 

namespace Src\Employee;

class Employee
{
    private $jobCode, $gender, $workedHours;
    
    private function getJobCode()
    {
        return $this->jobCode;
    }
    private function setJobCode($jobCode)
    {
        $this->jobCode = $jobCode;
    }

    private function getGender()
    {
        return $this->gender;
    }
    private function setGender($gender)
    {
        $this->gender = $gender;
    }

    private function getWorkedHours()
    {
        return $this->workedHours;
    }
    private function setWorkedHours($workedHours)
    {
        $this->workedHours = $workedHours;
    }

    public function createEmployee($jobCode, $gender, $workedHours)
    {
        $this->setJobCode($jobCode);
        $this->setGender($gender);
        $this->setWorkedHours($workedHours);
    }

    public function finalSalary(Occupation $occupation)
    {
        $salary = $this->getWorkedHours() * $occupation->getHourlyValue();

        if($this->getGender() == "F")
        {
            $salary += ($salary * 20)/100; 
        }

        return($salary);
    }
}