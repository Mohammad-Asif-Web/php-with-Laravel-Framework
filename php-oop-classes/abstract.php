<?php

/* What is abstract in oop?
Ans: In our program, only the things that are important will be shown, and other things that are not important will not be shown. The user will not know what is going on inside. The user will only see the outside. 

-The abstract keyword must be written before creating the abstract class and also abstract keyword must written before declare a function method.  
-Reduce complexity, makes code simpler and readable
-if we declare a abstract class we must create a abstract method into abstract class
*/

// Abstract class -- 
abstract class parentClass{
    public $name;
    abstract protected function calc($a, $b);
}

// we must declare two parameter in childClass function where we have declared two parameter in parenclass otherwise we will get error
class childClass extends parentClass{
    public function calc($a, $b){
        echo $a + $b;
    }
}
$sub = new childClass;
$subResult = $sub -> calc(10, 30);
echo $subResult;







?>