<?php
include 'database.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE  FROM `users` WHERE id =$id";
    $result = mysqli_query($db_connect, $sql);
    if($result){
        header('location:show.php');
    }
    else{
        echo 'error deleting';
    }
}