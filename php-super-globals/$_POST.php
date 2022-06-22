<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$GET Super variable</title>
</head>
<body>

    <form action="action.php" method="post">
        Subject: <input type="text" name='sub' placeholder="your subject"><br><br>
        Id: <input type="text" name='id' placeholder="Your Id"><br><br>
        <input type="submit" name='save'>
    </form>

    <!--
    All the value from get methods stored into action page by associative array format. on that page we can see those values by Print_r();
    post method don't create a link, it uses most for name,password, form, It is secure and safe
    -->
    
</body>
</html>