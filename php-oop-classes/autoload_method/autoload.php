<?php

// require 'first.php';
// require 'second.php';

// $testFirst = new first;
// $firstResult = $testFirst -> __construct();
// echo $firstResult,'<br>';

// $testTwo = new second;
// $secondRes = $testTwo -> __func();
// echo $secondRes;

// let's see in the above, we need to requiring every single file like first.php and second.php, but if we have so many file how would we manage it? will we need to include all files but it is so complex. That's why, to reduce this problem autoload method has come. We don't need to require any files, it automatic detect all the files, just we have to put all the files in one folder and put the file name as class name. let's start..

spl_autoload_register('myAutoloader');

function myAutoloader($class)
{
    // here we can add path into a variable if there was many folders
    // $path = '/path/to/class/';
    include $class.'.php';
}

$testFirst = new first;
$firstResult = $testFirst -> __construct();
echo $firstResult,'<br>';

$testTwo = new second;
$secondRes = $testTwo -> __func();
echo $secondRes;

?>