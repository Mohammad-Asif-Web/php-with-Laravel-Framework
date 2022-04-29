<?php

/*
- always declare a variable by $
-variables must start with letter or underscore character
-variables can't start with a number
-variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Asif';
$age = 28;
$_is_married = 'not married';
$has_kids = false;
$cash_on_hand = 375.50;

// here we can concatenate variable by double qotation mark
echo "$name is $age years old";

// here we are getting the value by js style write the variable into ${}
echo "<br>${name} is ${_is_married}<br>";
var_dump($has_kids);

// in single qotation mark we need (. and ,) for concatanate the multiple value
echo '<br>',$name, ' has ' , $cash_on_hand;
echo '<br>'  .$name.  ' is graduated <br>';

// here javascript get 55 as a string but php is different in this
$diff = '5' + '5';
var_dump($diff);
echo '<br>';
// php constant write in define keyword
define('host', 'localhost');
define('db_name','asif_dev');
echo host,' ', db_name;

