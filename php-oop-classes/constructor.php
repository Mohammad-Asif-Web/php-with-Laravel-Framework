<?php

class person{
    public $name;
    public $age;
    public $country;

    // in constructor function we have initial the value as a default parameter
    function __construct($n = 'Asif', $a = 24, $c = 'Netherland')
    {
        $this->name = $n;
        $this->age = $a;
        $this->country = $c;
    }
    function info(){
     return 'His name is '.$this->name. '. Age is ' .$this->age. '. Country: ' .$this->country. '<br>';
    }
}

// In the function, if we send the value as argument, It has first priority.
$p1 = new person('Muhammad', 30, 'Bangadesh');
echo $p1->info();

// But if we don't seny any value as argument, the parameter takes the value of default parameter as we declared in the __construc function
$p2 = new person();
echo $p2->info();




?>