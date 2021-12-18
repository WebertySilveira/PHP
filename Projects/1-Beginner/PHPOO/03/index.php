<?php

require __DIR__ . "/vendor/autoload.php";

$occupation[0] = new \Src\Employee\Occupation();
$occupation[0]->createOccupation(1, 10);

$occupation[1] = new \Src\Employee\Occupation();
$occupation[1]->createOccupation(2, 20);

$occupation[2] = new \Src\Employee\Occupation();
$occupation[2]->createOccupation(3, 30);

$employee = new \Src\Employee\Employee();
$employee->createEmployee(01, "F", 10);

echo($employee->finalSalary($occupation[0]));