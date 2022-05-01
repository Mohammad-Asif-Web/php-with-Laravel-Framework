<?php


$day = ['saturday', 'sunday', 'monday'];
// Search value from array by in_array method
var_dump(in_array('sunday', $day));
echo '<br>';
var_dump(in_array('friday', $day));
echo '<br>';

// count the array length, same as javascript length
print_r(count($day));
echo '<br>';


// add value to array
// array_unshift() add value to first index
array_unshift($day,'thursday', 'friday');
print_r($day);
echo '<br>';
// array_push() add value to last index
array_push($day, 'tuesday', 'wednesday');
print_r($day);
echo '<br>';


// remove value from array
// array_shift() remove value from first index
array_shift($day);
print_r($day);
echo '<br>';
// array_pop() remove value from last index
array_pop($day);
print_r($day);
echo '<br>';


// split the array into 2 chunk = খন্ড
$chunked = array_chunk($day, 2);
print_r($chunked);
echo '<br>';


// array Contatenate methods
$num1 = [1, 2, 3];
$num2 = [4, 5, 6];

// concatenate by array_merge() method
print_r(array_merge($num1, $num2));
echo '<br>';

// concatenate by spread operator
$spred_num = [...$num1, ...$num2];
print_r($spred_num);
echo '<br>';


// Combines the array in key value pairs
$fruits = ['apple', 'avocado', 'banana'];
$color = ['red', 'green', 'yellow'];

$combine = array_combine($color, $fruits);
print_r($combine);
echo '<br>';

// get the keys from array
print_r(array_keys($combine));
echo '<br>';

// get the values from array
print_r(array_values($combine));
echo '<br>';

// flip the arrays value and keys
print_r(array_flip($combine));
echo '<br>';


// array range()
$range = range(1, 10);
print_r($range);
echo '<br>';

// array map()
// $map_result = array_map(function($item){
//     echo $item * 2;
// }, $range);
// print_r($map_result);
// echo '<br>';


// array filter()
$fil_res = array_filter($range, fn($item) => 
    $item <= 5);
    
print_r($fil_res);
echo '<br>';


// array reduce()
$red_res = array_reduce($range, fn($scarry, $item) => 
    $scarry + $item);

var_dump($red_res);














