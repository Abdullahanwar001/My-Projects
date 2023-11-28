<?php
class Employee{
    public $name;
    public $salary;
    public $age;


    function __construct($name,$salary,$age){
        $this->name = $name;
        $this->salary = $salary;
        $this->age = $age;
    }
}
$Abdullah = new Employee ("Abdullah", 60000, 21);
$Talha = new Employee ("Talha",40000,25);
$Anwer = new Employee ("Anwer",80000,44);

echo "The salary of Abdullah is $Abdullah->salary and age is $Abdullah->age <br>";
echo "<br>";
echo "The salary of Talah is $Talha->salary and age is $Talha->age<br>";
echo "The salary of Anwer is $Anwer->salary and age is $Anwer->age";



?>