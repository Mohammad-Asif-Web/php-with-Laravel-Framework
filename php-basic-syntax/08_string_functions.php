<?php

$str = 'this is asif';

//Get length of a string
echo strlen($str);
echo '<br>';

//  Find the position of the first occurrence of a substring in a string
echo strpos($str, 's');
echo '<br>';

// reverse the string
echo strrev($str);
echo '<br>';

// Find the position of the last occurrence of a substring in a string
echo strrpos($str, 's');
echo '<br>';

// make a string to uppercase
echo strtoupper($str); 
echo '<br>';
//strtolower() makes a string to lowercase

// upper the first character of each words in a sentence, works like capitalize
echo ucwords($str);
echo '<br>';

// replace the words of string
echo str_replace('asif', 'muhammad', $str);
echo '<br>';


// str_start_with function
// str_ends_with function


// str can directly convert into html tag, or we can write any script
echo $str2 = '<h1>muhammad asif</h1>';
echo '<br>';
// echo '<script>alert("Asif")</script>';


// this won't directly convert the html tag to browser
echo htmlspecialchars($str2);








