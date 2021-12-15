<?php
require_once "Occupation.php";
require_once "Employee.php";

$occupation[0] = new Occupation();
$occupation[0]->createOccupation(1, 10);

$occupation[1] = new Occupation();
$occupation[1]->createOccupation(2, 20);

$occupation[2] = new Occupation();
$occupation[2]->createOccupation(3, 30);

$employee = new Employee();
$employee->createEmployee(01, "F", 10);

echo($employee->finalSalary($occupation[0]));