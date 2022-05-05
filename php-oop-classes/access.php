<?php
include 'something.php';
include 'access_modifier.php';

// object is accessed by -> sign
// array is accessed by => sign

$add = new Something;
echo $add -> add(10, 30);
echo '<br>';

$sub = new Something;
echo $sub -> sub(30, 10);
echo '<br>';

//access modifier
$name = new Admin;
$result =  $name -> inherit('Asi');
echo $result;
echo '<br>';


// calling protected class modifier
$many = new user;
echo $many -> many();
echo '<br>';

echo $many -> laravel();
echo $many -> boot();




