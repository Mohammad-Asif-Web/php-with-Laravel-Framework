<?php

// Build in variables that are always available in all scopes

/* 
$_GET - Contains information about variables passed through a URL or a Form.
$_POST - Contains information about variables passed through a Form.
$_COOKIE - Contains information about variables passed through a cookie
$_SESSION - Contains information about variables passed through a session
$_SERVER - Contains information about the server environment
$_ENV - Contains information about the environment variables.
$_FILES - Contains information about files uploaded to the script 
$_REQUEST - Contains information about variables passed through the form or URL.
*/

// all the server methods and function are include in this server variable. uncomment this($_SERVER) to see all the server variables.
// print_r($_SERVER);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server variable names and methods</title>
</head>
<body>

<ul>
    <li>Host Name: <?= $_SERVER['HTTP_HOST']; ?></li>
    <li>This Document Root: <?= $_SERVER['DOCUMENT_ROOT']?></li>
    <li>This Server Name: <?= $_SERVER['SERVER_NAME']?></li>
    <li>This Server Port: <?= $_SERVER['SERVER_PORT']?></li>
    <li>Current File Dir: <?= $_SERVER['PHP_SELF']?></li>
    <li>Request URI: <?= $_SERVER['REQUEST_URI']?></li>
    <li>Server Software: <?= $_SERVER['SERVER_SOFTWARE']?></li>
    <li>Client Info: <?= $_SERVER['HTTP_USER_AGENT']?></li>
    <li>Remote Address: <?= $_SERVER['REMOTE_ADDR']?></li>
    <li>Remote Port: <?= $_SERVER['REMOTE_PORT']?></li>
</ul>
    
</body>
</html>











