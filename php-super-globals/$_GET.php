<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$GET Super variable</title>
</head>
<body>

    <form action="action.php" method="get">
        Name: <input type="text" name='fname' placeholder="First Name"><br><br>
        Age: <input type="text" name='age' placeholder="Your Age"><br><br>
        <input type="submit" name='save'>
    </form>

    <!-- The get method main behavior is he will give us a link. but this is not secure. users can see this link.
    All the value from get methods stored into action page by associative array format. on that page we can see those values by Print_r();
    
    When we click on submit the get method will give us this type of url link:
    action.php?fname=Md+Asif&age=28&save=Submit
    here fname = Md+Asif -> fname value is Md Asif
    age = 28 -> age value is 28 and 
    save = submit -> save value is submit

     -->
    
</body>
</html>