<?php
include "database.php";
session_start();

$branch = $_POST['branch'];
$user_name = $_POST['username'];
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

print_r($_POST);

if(empty($branch)){
    $_SESSION['empty_branch'] = 'no branch selected';
    header('location: index.php');
}
if(empty($user_name)){
    $_SESSION['empty_username']  = 'user name required';
    header('location: index.php');
}
if(empty($first_name)){
    $_SESSION['empty_firstname']  = 'first name required';
    header('location: index.php');
}
if(empty($last_name)){
    $_SESSION['empty_lastname']  = 'last name required';
    header('location: index.php');
}
if(empty($email)){
    $_SESSION['empty_email']  = 'email required';
    header('location: index.php');
}
if(empty($password)){
    $_SESSION['empty_password']  = 'password required';
    header('location: index.php');
}
else{
    $insert_query = "INSERT INTO users(branch, username, firstname, lastname, email, password) VALUES('$branch','$user_name', '$first_name', '$last_name', '$email', '$password')";

$result = mysqli_query($db_connect, $insert_query);
}







