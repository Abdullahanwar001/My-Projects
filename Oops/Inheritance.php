<?php
class Employee{
    public $name = "Abdullah";
    private $salary = 16000;
    private $sge = 44;

    function setSalary($salary){
        $this->salary=$salary;
    }
    function getSalary(){
        echo ".The salary of Employee is $this->name and salary $this->salary<br>";
        echo "<br>";
    }

    function setage($age){
        $this->age=$age;
    }
    function getage(){
        echo " .The Employee of $this->name and  the salary is $this->salary and the age is $this->age <br>";
    }


    function showName(){
        echo"The salary of Employee is $this->name";
    }
    
}
//For Abdullah:

$Abdullah = new Employee();
$Abdullah->name ="Abdullah";
//For Salary:
$Abdullah->setsalary (100000);
$Abdullah->getsalary();
$Abdullah->setage(22);
$Abdullah->getage();
//$Abdullah->showName();

//For Talha:

$Talha=new Employee();
$Talha->name="Talha";
$Abdullah->setsalary (52000);
$Abdullah->getsalary();
$Talha->setage(31);
$Talha->getage();

//For Anwer:

$Anwer=new Employee();
$Anwer->name="Anwer";
$Abdullah->setsalary (5000000);
$Abdullah->getsalary();
$Anwer->setage(44);
$Anwer->getage();
?>