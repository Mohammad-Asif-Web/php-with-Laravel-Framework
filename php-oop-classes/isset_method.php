<?php

// isset methed checks is there any value is exists or not. If exists return 0 wether returns 0.

class student{
    public $course;
    private $firstName;
    private $lastName;
    private $detail = ['name'=>'testing it', 'age'=>28];

    public function getName($f, $n){
        echo 'Your full name is '.$this->firstName = $f.' '. $this->lastName = $n;
    }
    
    // this isset function check the value from array
    public function __isset($name)
    {
        echo isset($this->detail[$name]);
    }
}
// 
$student = new student;
$student->getName('asif', 'khan');
echo '<br>';

// initializing value to course
$student->course = 'php';
// Checking either course variable has value or not
echo isset($student->course);

// this is checking from function array name variable and it will return 1.
echo isset($test->name); 




?>