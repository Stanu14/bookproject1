

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            background-color:blue;
            width: 30%;
         
            margin:15%;
            border-radius:15%;
            padding:2%;
            border:2px solid green;
        }
        form input{
            border: 2px solid:green;
}
    </style>
</head>
<body> 
<form class="" action="change.php" method="POST">
   
    Password:
    <input type="password" name="password" value="">
    <br>
    New Password:
    <input type="password" name="newpassword" value="">
    <br>
    Confirm New Password:
    <input type="password" name=" connewpassword" value="">
    <br>
    <input type="submit" name="forgetpassword" value="ForgetPassword">
</form>
</body>
</html>
 