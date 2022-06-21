<?php

/*
static is different from others method in oop.
-if we create any property and methods we must use static keyword
-when we implement any property in the function use self::variableName instead of $this.


*/

use childClass as GlobalChildClass;

class personal{
    public static $name = 'asif';

    public static function info(){
        echo self::$name;
    }

    // use static method in constructor function
   public function __construct($n)
   {
       self::$name = $n;
       echo 'Construnct: Name is '.self::$name;
   }
}

// calling static properties 
$nameRes = personal::$name;
echo $nameRes.'<br>';
// calling static method
echo personal::info();
echo '<br>';

// calling constructor function
$construct = new personal('Muhammad');
echo '<br>';


// when inherited static class use parent:: instead of self::
class childClass{
    public static $id;
    public static $age;

}

class parentClass extends childClass{
    public static function show($i, $a){
        echo 'your id is'.parent::$id = $i;
        echo ' and your age is '.parent::$age = $a;
    }
}
$test = new parentClass;
$test->show(101, 30);
