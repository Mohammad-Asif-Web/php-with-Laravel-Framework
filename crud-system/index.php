<?php
 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h1 class="text-white text-capitalize">student management system</h1>
                    </div>
                    <div class="card-body bg-warning">
                        <form action="register.php" method="POST" class="form-control bg-primary">
                            <!-- branch -->
                            <div class="form-group mb-3">
                                <label for="branch" class="text-capitalize text-white text-bold fs-5 mb-2">branch</label>
                                <select name="branch" id="branch" class="form-control">
                                    <option value="">---Select Branch---</option>
                                    <option value="sutrapur">Sutrapur</option>
                                    <option value="dhanmondi">Dhanmondi</option>
                                    <option value="gulshan">Gulshan</option>
                                </select>
                                <span class="text-danger">
                                    <?php
                                    if(isset($_SESSION['empty_branch'])){
                                        echo $_SESSION['empty_branch'];
                                        unset($_SESSION['empty_branch']);
                                    }
                                    ?>
                                </span>
                            </div>
                            <!-- username -->
                            <div class="form-group mb-3">
                                <label for="username" class="text-capitalize text-white text-bold fs-5 mb-2">user name</label>
                                <input type="text" id="username" name="username" placeholder="Your username" class="form-control">
                                <span class="text-danger">
                                    <?php
                                    if(isset($_SESSION['empty_username'])){
                                        echo $_SESSION['empty_username'];
                                        unset($_SESSION['empty_username']);
                                    }
                                    ?>
                                </span>
                            </div>
                            <!-- firstname -->
                            <div class="form-group mb-3">
                                <label for="firstname" class="text-capitalize text-white text-bold fs-5 mb-2">first name</label>
                                <input type="text" id="firstname" name="firstname" placeholder="Your firstname" class="form-control">
                                <span class="text-danger">
                                    <?php
                                    if(isset($_SESSION['empty_firstname'])){
                                        echo $_SESSION['empty_firstname'];
                                        unset($_SESSION['empty_firstname']);
                                    }
                                    ?>
                                </span>
                            </div>
                            <!-- lastname -->
                            <div class="form-group mb-3">
                                <label for="lastname" class="text-capitalize text-white text-bold fs-5 mb-2">last  name</label>
                                <input type="text" id="lastname" name="lastname" placeholder="Your lastname" class="form-control">
                                <span class="text-danger">
                                    <?php
                                    if(isset($_SESSION['empty_lastname'])){
                                        echo $_SESSION['empty_lastname'];
                                        unset($_SESSION['empty_lastname']);
                                    }
                                    ?>
                                </span>
                            </div>
                            <!-- email -->
                            <div class="form-group mb-3">
                                <label for="email" class="text-capitalize text-white text-bold fs-5 mb-2">user email</label>
                                <input type="text" id="email" name="email" placeholder="Your email" class="form-control">
                                <span class="text-danger">
                                    <?php
                                    if(isset($_SESSION['empty_email'])){
                                        echo $_SESSION['empty_email'];
                                        unset($_SESSION['empty_email']);
                                    }
                                    ?>
                                </span>
                            </div>
                            <!-- password -->
                            <div class="form-group mb-3">
                                <label for="password" class="text-capitalize text-white text-bold fs-5 mb-2">user password</label>
                                <input type="text" id="password" name="password" placeholder="Your password" class="form-control">
                                <span class="text-danger">
                                    <?php
                                    if(isset($_SESSION['empty_password'])){
                                        echo $_SESSION['empty_password'];
                                        unset($_SESSION['empty_password']);
                                    }
                                    ?>
                                </span>
                            </div>
                            <button type="submit" name="submit" class="fs-5 text-capitalize text-white bg-primary border-white outline-0 rounded py-1 px-3 mb-3">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>