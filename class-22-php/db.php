<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "asif";

$con = mysqli_connect($serverName, $userName, $password, $dbName);

if($con){
	echo "database connnection success";
}
else{
	echo "error: ".$con->connect_error();
}






?>