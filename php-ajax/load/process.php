<?php

// $sl = $_POST['sl'];
$name = $_POST['name'];
$email = $_POST['email'];
$dist = $_POST['district'];
$dept = $_POST['subject'];


$con = new mysqli("localhost", "root", "", "student");
$command = "INSERT INTO tbl(name, email, district, subject) VALUES('$name', '$email', '$dist', '$dept')";

$result = $con->query($command);
if($result){
    $command2 = "SELECT * FROM tbl";
    $result2 = $con->query($command2);
    foreach ($result2 as $data) {
        echo "<tr style='text-align: center'>
         <td>".$data['id']."</td>
         <td>".$data['name']."</td>
         <td>".$data['email']."</td>
         <td>".$data['district']."</td>
         <td>".$data['subject']."</td>
        </tr>";
    }
}





// echo "<tr style='text-align: center' bor>
//         <td>$sl</td>
//         <td>$name</td>
//         <td>$email</td>
//         <td>$dist</td>
//         <td>$dept</td>
//     </tr>
//     ";




?>