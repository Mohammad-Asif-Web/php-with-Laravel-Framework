<?php

/*in php we can not include two classes or two functions with same name in a file. To solve this problem php has a method namespace. 
*/

// if we call this way without namespace the server will get fatal error. because we can not use two classes with same name in a file.
require 'product.php';
require 'testing.php';
require 'laravel.php';

use pro\v1\command as cmd;
// its call by namespace, it will not throw error. we are calling same object in one file
// calling class
$pro = new pro\product;
$test = new test\product;

// calling function
pro\wow();
test\wow();

$obj = new cmd\abc();


?>

