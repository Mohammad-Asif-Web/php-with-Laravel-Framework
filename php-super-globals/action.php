<?php

/*============== GET METHOD ===============*/

// Text in a pre element is displayed in a fixed-width font, and it preserves both spaces and line breaks

// In action file all the get method data will store in the $_GET. we can see the values by print_r function, because data are stored here as associative array.
// get is not secure, the data show to url bar. it most uses for search bar
// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

// also we can get single values by there name;
// print_r($_GET['fname']);
// echo '<br>';
// print_r($_GET['age']);



/*============== POST METHOD ===============*/
// post method don't create a link, it uses most for name,password, form, It is secure and safe
echo '<pre>';
print_r($_POST);
echo '</pre>';

// also we can get single values by there name;
print_r($_POST['sub']);
echo '<br>';
print_r($_POST['id']);


?>