<?php

// total value of numbers
$num = 0;
for($x= 0; $x < 10; $x++){
    $num += $x;
    echo $num, '<br>';
}
echo 'total value is ',$num;
echo '<br';


// multiplication of 2
for($y = 0; $y <= 10; $y++){

    echo '<br> Multiplication of 2 * ', $y, ' = ', 2 * $y, '<br>';
}

/*while loop and 
do while loop syntax
 is same as 
 javascript language
*/

// foreach loop
$posts = ['first post','second post','third post'];

foreach($posts as $post){
    echo $post;
}
echo '<br>';

// foreach with index numbers
foreach($posts as $index => $post){
    echo $index + 1, ' index - ', $post, '<br>';
}
echo '<br>';

//associative array in foreach loop
 $persons = [
     'first_name' => 'Md. Asif',
     'age' => 28,
     'married' => false
 ];
 foreach($persons as $key => $value){
     echo $key, ' - ', $value, '<br>';
 }


























