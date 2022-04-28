
<!-- Always write useful php code top of the html code and must end the php with '?>' -->
<?php
    echo 'Always write useful php code top of the html code and must end the php with "?>" ';
    

    echo '<br>must end the line with semicolon when writing php codes';
    echo '<br>always write string into the quatation';
    echo '<br>',1; //printing number types data

    //print -- work like echo, but can only take single argument
    print "<br>display value by print keyword ";
    print 1234;

    // echo -- print multiple output like strings, number, html and many others etc
    echo '<br>', 123, ' hello ', 10.5, '<br>';

    //print_r() -- it prints maximum two parameter and single values. basically this is used for arrays.
    print_r(124);
    print_r([1,2,3,4]);
    
    // var dump() -- return more info like data type, length and value
    echo '<br>';
    var_dump('hello'); // this string data type and length is 5
    echo '<br>';
    var_dump(1234); // this is integer data type and length is 4
    echo '<br>';
    var_dump(true); // this is boolean data type

    // var_export() -- similar to var_dump(). outputs a string representation of a variable
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php basic syntax</title>
</head>
<body>
    
    <h1>This is ordinary html header</h1>

    <!--  this is how to write code between html tag but this code will not show to browser -->
    <h3>This h3 html code will display but inside the php code will not display to browser<br> because we have not print it by echo or print <?php "the first php code into html tag"?></h3>

    <p><?php echo 'But this code will print into browser'?></p>
    <!-- short hand code in php -->
    <p><?= 'This is short hand technique'?></p>

</body>
</html>

<!-- also we can write the php bottom of the html code and there is no need to end php with '?>' -->
<?php
echo "<br>Also we can write the php bottom of the html code and there is no need to end php with '?>'";