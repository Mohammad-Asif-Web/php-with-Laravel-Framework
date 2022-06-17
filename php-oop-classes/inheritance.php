<?php

class employer{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    function info()
    {
        echo '<h1>Employer Profile</h1>';
        echo 'Employer name is: '. $this->name. '<br>';
        echo 'Employer age is: '. $this->age. '<br>';
        echo 'Employer salary is: '. $this->salary. '<br>';
    }
}

$emp = new employer('Asif', 28, 35000);
echo $emp -> info();

class manager extends employer{
    
    public $mobile;
    public $fare;
    public $totalSalary;

    function info(){
        $this->totalSalary = $this->mobile + $this->fare + $this->salary;
        echo '<h1>Manager Profile</h1>';
        echo 'Manager name is: '. $this->name. '<br>';
        echo 'Manager age is: '. $this->age. '<br>';
        echo 'Manager salary is: '. $this->totalSalary. '<br>';
    }
}

$mng = new manager('Muhammad', 30, 60000);
echo $mng -> info();



