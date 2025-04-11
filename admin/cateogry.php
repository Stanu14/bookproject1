<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
form{
    /* background-color:blue; */
    /* background-color:rgba(143, 191, 238, 0.367); */
            /* width: 30%;
          */
            /* margin:15%;
            border-radius:15%; */
            padding:2%;
          
}
.col-md-9{
    /* width: 1140px; */
    background-color:rgba(143, 191, 238, 0.367);
}
.col-md-9 th{
    border:1px soild blue;
}
/* input{
    border: 2px solid:green;
} */
        </style>
</head>
<body>
    <?php
    include "navbar.php";
    ?>
<div class="col-md-9">
    <form class="" action="add_cat.php" method="POST">
    Add category:<br>
    <input type="text" name="cat" value=""  >
    <br>
    
    <input type="submit" name="submit" value="Submit">

    </form>

<table class="col-md-9">
    <tr>
        <th>Id</th>
        <th>Category</th>
        <th>Action</th>
    </tr>
    <?php
    session_start();
    if(isset($_SESSION['admin'])){
include "config.php";
$sql1 = "select * from catrgory";
$query=mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($query)){
 ?>
 <tr>
 <td><?=$row['id'];?></td>
    <td><?=$row['catrgory'];?></td>
    <td><a href="update.php?id=<?=$row['id']?>">edit</a></td>
    <td></td>
 </tr>
 <?php
}
    }
    else{
        header('location:add_cat,php');
    }
?>
</table>
</div>
</body>
</html>