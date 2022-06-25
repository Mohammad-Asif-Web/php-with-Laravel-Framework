<?php

/* 
step 1: session_start();
stemp 2: $_SESSION[name] = value;
step 3: echo $_SESSION[name];

Delete Session
Step 1: session_unset(); remove all session variables
step 2: session_destroy(); Destroy the sessin

session works as cookies but it stores data to server not user system. Its proceessing time is how much time the user browse the browser. when the user stop the browser the sessin automatic stops. Basically It uses 90% in the login and logout page. when the user log in any page the session starts and when the user log out from the page the session destroys.

 */

 session_start();

 $_SESSION['color'] = 'green';

 echo 'session variable is set'




?>






