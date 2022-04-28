<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class 21 php</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <h1>My first PHP class</h1>
     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque ab suscipit voluptate aliquam consequatur perspiciatis beatae enim asperiores consequuntur aut?</p>
     
     <select>
         <?php

        for($i = 1994; $i<2023; $i++){
        echo "<option value='".$i."'>'".$i."'</option>";
        }
        ?>
        
        </select>
        <br>

<?php

include "db.php";


if(isset($_POST['submit'])){
	// print_r($_POST);
    $fname = $_POST["fname"];
    $uname = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $status = $_POST["status"];
    
        if(empty($name)){
            echo "<div class='alert alert-success'>name field is empty
            </div>";
        }
        if(empty($uname)){
            echo "<div class='alert alert-success'>name field is empty
            </div>";
        }
        if(empty($email)){
            echo "<div class='alert alert-success'>name field is empty
            </div>";
        }
        if(empty($phone)){
            echo "<div class='alert alert-success'>name field is empty
            </div>";
        }
        if($status == "-----select status-----"){
            echo '<div class="alert alert-danger" role="alert">please select status</div>';
        }
    
        $com = "INSERT INTO array_of_death(fName, username, email, phone, status) 	VALUES ('$fname', '$uname', '$email', '$phone','$status')";
        $result = $con->query($com);
        if($result){
        echo 'div class ="alert alert-success" role="alert"> alert</div>';
        }
        else{
        echo "Error".$con->error();
        }
    }
?>

<form class="form-control" method="POST">
<div class="mb-3">
  <label for="fname" class="form-label">First Name</label>
  <input type="text" class="form-control" name="fname" id="fname" placeholder="first name">
</div>
<div class="mb-3">
  <label for="username" class="form-label">User Name</label>
  <input type="text" class="form-control" name="username" id="username" placeholder="user name">
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="text" class="form-control" name="email" id="email" placeholder="user email">
</div>
<div class="mb-3">
  <label for="phone" class="form-label">Phone</label>
  <input type="text" class="form-control" name="phone" id="phone" placeholder="user phone">
</div>
<div class="mb-3">
  <label for="status" class="form-label">User status</label>
  <select class="form-control" aria-label="default-select-example" name="status">
      <option value="0">-----select one -----</option>
      <option value="1">one</option>
      <option value="2">two</option>
      <option value="3">three</option>
    </select>
</div>
<div class="col-12">
    <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
  </div>
</form>


    































     



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>