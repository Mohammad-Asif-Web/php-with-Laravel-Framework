<?php

/*
<less than
>greater than
<= less than or equal to
>= greater than or equal to
== equal to
=== identical to
!= Not equal to
!== identical to
 */

 $age = 18;
 if($age >= 18){
     echo 'you are ready for vote';
 }
 else{
    echo 'You are not eligible';
 }
 echo'<br>';


 date_default_timezone_set("Asia/Dhaka"); //this is default timezone function
 $hour = date('h');
 if($hour < 12){
 echo 'good morning';
 }
 elseif($hour <= 17){
    echo 'good afternoon';
 }
 else{
     echo 'good evening';
 }
 echo'<br>';

//  empty conditional statement
$fruit = ['grape', 'mango', 'pineapple'];
if(empty($fruit)){
    echo 'this is empty';
}
else{
    print_r($fruit);
}
echo'<br>';

if(!empty($fruit)){
    echo $fruit[0], ' ', $fruit[1];
}
else{
    echo 'this is khali';
}
echo'<br>';


// ternary operator
$post = [];
// echo !empty($post) ? $post : 'no post';
$result = !empty($post) ? $post : 'no post';
echo $result;
echo'<br>';


// switch statement
$color = 'yellow';

switch($color){
    case 'red':
        echo 'this is red';
        break;
    case 'blue':
        echo 'this is blue';
        break;
    case 'green':
        echo 'this is green';
        break;
        default:
        echo 'undefined color';
}
echo'<br>';


// isset variable check
$a = 5;
// It True, because $a is set, It has a value
if(isset($a)){
    echo $a;
}
else{
    echo 'nothing set to $a';
}
echo'<br>';

// It False, because $b is not set, It has null value
$b = null;
if(isset($b)){
    echo $b;
}
else{
    echo 'variable $b is not set';
}














