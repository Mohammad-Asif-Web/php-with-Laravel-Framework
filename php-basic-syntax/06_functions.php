<?php

// global scope of function
$x = 10;
function func(){
    global $x; //$x will return undefined, if we don't declare global keyword.
    echo $x;
}
func();
echo '<br>';

// return value of function, must use echo when calling the function
function add($num1, $num2){
    return $num1 +  $num2;
}
echo add(10, 20);
echo '<br>';

//we can store the function to a variable like js
function sub($num1, $num2){
    $result = $num1 - $num2;
    echo $result;
}

$final = sub(90, 20);
echo $final;
echo '<br>';

//default parameter of function
function div($num1 = 100, $num2 = 20){
    echo $num1 / $num2;
}
div();
echo '<br>';

// return value of string
function str($name, $age){
    return "$name is $age years old";
}
echo str('Asif', 26);





















