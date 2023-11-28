<?php
class Employee{
    public $name;
    public $salary;

    public function __construct($name, $lang,$salary){
        $this-> name = $name;
        $this->lang = $lang;
        $this-> salary = $salary;
        $this->describe();
    }
    protected function describe(){
        echo "*.Name of the Programmer:$this->name<br>";
       echo" <br>";
        echo "*.Salary of the Programmer:$this->salary<br>";
        echo" <br>";
        echo "*.Language of the Programmer:$this->lang<br>";
        echo" <br>";
    }
}
class programmer extends Employee{
    public $lang ="php";
    public function __construct($name, $lang, $salary){ 
    $this-> name = $name;
    $this->lang = $lang;
    $this-> salary = $salary;
    $this->describe();
}
}  

$Abdullah = new Employee("Abdullah","C++", 800000);
$Talha =new programmer ("Talha","Pytho",30000);

?>