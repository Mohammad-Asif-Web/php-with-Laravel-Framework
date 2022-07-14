<?php


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax load</title>
</head>
<body>
    
    <h1 class="head">muhammad asif</h1>
    <p class="load">load</p>






    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript">
        
     $(document).ready(function(){
        $('.load').click(function(){
            $('.head').text('this is heading')
            $('.head').css('color', 'red')
        })
     })

    </script>
</body>
</html>