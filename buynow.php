<?php
include "admin/config.php";
session_start();
if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin-top:150px;
            margin-left:50px;
            margin-right:1000px;
            background-color:#3c84f066;
            border-radius: 25px;

        }
        textarea{
            height:100px;
            width: 88% !important;
            margin-left: 6% !important;
        }
        h1{
            padding-left:30px;
            color:blue !important;
        }
        input{
            margin-left:30px !important;
        }
        label{
            margin-left: 10% !important; 
            color:blue !important;
        }
    </style>
</head>
<body>
     <?php
     include "_navbar.php";
     ?>
     <form action="placeorder.php" method="POST">
        <h1>Address</h1>
        <textarea  class="form-control" name="address" value="Address" id=""></textarea><br>
        <label for="">COD</label>
        <input type="radio" class="radio" name="payment" value="COD" checked>
        <br>
        <label for="">Online</label>

        <input type="radio" class="radio" name="payment" vlaue="online" disabled><br>
        <input type="submit" class="btn btn-primary" value="Buy Now ">
     </form>
    </body>
    </html>
<?php } else{
    header('location:signin.php');
    }?>