<?php
session_start();

// I have set a cookie. now I will see the cookie from this page

echo "Cookie Value: " . $_COOKIE['asif'];

echo '<br><br><br><br><br>';


// see session results
echo '<h1 style="color:red; text-align:center">SESSION STARTS FROM HERE</h1><br><br>';

echo 'Viewing Session Result: '. $_SESSION['color'];

// we can see all session variables and values by print_r()
echo '<br>';
print_r($_SESSION);

// we can destroy the session, first we have to unset() the session, otherwise destroy won't work.

?>








