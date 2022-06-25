<?php

/*
Rule 1: put the cookie code top of the html. otherwise it will not work. 
Rule 2: If we have disable the cookie from our Browser, we can not set a Cookie. we will get error, when we will echo the cookie.

cookie = suppose I have a website. If someone browse my site I want to save some data to user system/pc. so that in future I can control his browsing info, location, his address. so this data is called Cookies.
To set the Cookies, PHP has a special function -- setcookie(name, value, expire, path, domain, secure, httponly)

1. name -- we will set a cookie name as we set a variable name
2. value -- this value is the main data which we want to save user system or pc.
3. expire -- if we set a value to user system when will we expire it. we will count it as second
4. path -- we set a cookie. if we want retrieve this cookie from a page-
-- if want to retrive this cookie from any page we will use '/' in path
-- if we want to retrive from a particular page we will use that page link
ex: /some-pagelink
5. domain -- we are setting cookie for a website, weather will access cookie from that domain or sub-domain.
6. secure -- it has two values True or False. It we set it True the cookie will only run in https sites, otherwise it won't run to any site. if we set it to False cookie will run on any sites.
7. httponly -- when we will create a cookie we can access it through javascript. But if we pass it as True then we access this cookie only from server side language like PHP, PYTHON, DOTNET. OR if we set it to false we can access it through clien side.

*/

// setting cookie
$cookie_name = 'asif';
$cookie_value = 'this is local cookie value';

setcookie($cookie_name, $cookie_value, time()+ (86400), "/");
// time calculation: time() = is current time. 1m = 60s. 1hour = 3600s. 1day -> 3600 * 24 = 86400s
// 30 day calculation -> 1 day = 86400. 30 day -> 86400 * 30 = 2592000s

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set A Cookie</title>
</head>
<body>
<!-- condition is cookie set or not in our browser -->
<div>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        // we can check this to block the all cookies from setting in the browser
        echo "<h1 style='color:red'>Cookie is not set</h1>";
    }
    else{
        echo $_COOKIE[$cookie_name];
    }
    ?>
</div>
    

</body>
</html>

