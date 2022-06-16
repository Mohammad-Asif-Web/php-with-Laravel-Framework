<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Table Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header bg-warning d-flex">
                        <button class="btn btn-success"><a href="index.php" class="text-start text-white">Add User</a></button>
                        <h1 style="color:firebrick;" class="card-title text-capitalize w-50">student management data table</h1>
                    </div>
                    <div style="background: firebrick;" class="card-body">
                        <table class="table table-success table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Branch</th>
                                    <th>User Name</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'database.php';
                                $show_data = "SELECT * FROM `users`";
                                $show_query = mysqli_query($db_connect, $show_data);
                                ?>
                               
                                <?php foreach($show_query as $index => $value): 
                                $id = $value['id'] ;
                                    ?>
                                    <tr>
                                        <th><?= $index + 1 ?></th>
                                        <td class="table-primary"><?= $value['branch'] ?></td>
                                        <td class="table-secondary"><?= $value['username'] ?></td>
                                        <td class="table-danger"><?= $value['firstname'] ?></td>
                                        <td class="table-warning"><?= $value['lastname'] ?></td>
                                        <td class="table-info"><?= $value['email'] ?></td>
                                        <td class="table-light"><?= $value['password'] ?></td>
                                        <td><?php
                                            if($value['status'] == 1){
                                                echo '<span class="text-white bg-success p-1"> Active</span>';
                                            }
                                            else{
                                                echo '<span class="text-danger bg-warning p-1"> Inactive</span>';
                                            }
                                        ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary"><a href="update.php" class="text-white text-decoration-none">Update</a></button>
                                            <button class="btn btn-danger"><a href="delete.php?deleteid=<?=$id?>" class="text-white text-decoration-none">Delete</a></button>
                                            
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>