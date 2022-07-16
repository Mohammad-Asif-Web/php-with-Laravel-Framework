<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax load</title>
    <style>
        input{
            display: block;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    
    <form action="process.php" method="POST">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="text" name="dist" id="dist" placeholder="Enter your dist name">
        <input type="text" name="sub" id="sub" placeholder="Enter your dept. name">
        <input type="submit" value="submit" id="save">
    </form>

    <table id="tbl" style="border: 1px solid #000; width: 100%; background: #971741; color: #fff">
        <tr>
            <th>Sl No.</th>
            <th>Student Name</th>
            <th>Student Email</th>
            <th>District Name</th>
            <th>Department Name</th>
        </tr>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            $('#save').click(function(){
                var name = $('#name').val();
                var email = $('#email').val();
                var dist = $('#dist').val();
                var dept = $('#sub').val();
                $.ajax({
                    'url' : 'process.php',
                    'type' : 'post',
                    'data' :{
                        'name' : name,
                        'email' : email,
                        'district' : dist,
                        'subject' : dept
                    },
                    'success' : function(data){
                        $('#tbl').append(data);
                    }
                })
                return false;
            })
        })


    
    </script>
</body>
</html>