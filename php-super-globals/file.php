<?php

if($_FILES['image']){
    
    $file = $_FILES['image'];

    echo '<pre>';
    print_r($file);
    echo '</pre>';
    echo '<br>';

    // echo 'File name: '.$file['name'];
    // echo '<br>';
    // echo 'File type: '.$file['type'];
    // echo '<br>';
    // echo 'File temporary name: '.$file['tmp_name'];
    // echo '<br>';
    // echo 'File error: '.$file['error'];
    // echo '<br>';
    // echo 'File size: '.$file['size'];
    // echo '<br>';
    $file_name = $file['name'];
    $file_size = $file['size'];
    $file_tmp_name = $file['tmp_name'];
    $file_type = $file['type'];

    if(move_uploaded_file($file_tmp_name, "upload/".$file_name)){
        echo 'Successfully Uploaded';
    }
    else{
        echo 'reupload the file';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_FILES PHP</title>
</head>
<body>

    <h1>Upload Your Files</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">  <br><br>
        <input type="submit">
    </form>

</body>
</html>






