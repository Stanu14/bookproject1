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
    background-color:rgba(143, 191, 238, 0.367);

            /* width: 30%;
            
          */
            /* margin:15%;
            border-radius:15%; */
            padding:2%;
          
}
/* input{
    border: 2px solid:green;
} */
        </style>
</head>
<body>
    <?php
    include "navbar.php";
    $id = $_GET['id'];
    include "config.php";
  $sql1 = "select * from catrgory where id = '$id'";
  $query=mysqli_query($con,$sql1);
  $row = mysqli_fetch_array($query);
    ?>
<div class="col-md-9">
    <form class="" action="update_cat.php" method="POST">

    Update category:<br>
    <input type="text" name="cat" value="<?=$row['catrgory']?>" >
    <input type="hidden" name="id" value="<?=$row['id']?>"  >
    <br>
    
    <input type="submit" name="submit" value="Submit">

    </form>

 </div>
</body>
</html>