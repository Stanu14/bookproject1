<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    table {
        background-color:rgba(143, 191, 238, 0.367);
        width:100%
    }
    table tr th, table tr td{
        border:1px solid black;
    }
   
  tr:nth-child(even) {
    background:#ddd;
  }
  tr:nth-child(1){
    background: #000;
    color:#fff;
    padding:10px;
  }

</style>
</head>
<body>
    <table style="" >
        <tr>

            <th>id</th>
            <th>Title</th>
            <th>Author name</th>
            <th>Price</th>
            <th>sellingprice</th>
            <th>Cathgory</th>
            <th>Publication</th>
            <th>Despription</th>
            <th>Image</th>
            <th>Action</th>
            <th>Delete</th>
            </tr>
            <?php
        
 
   if(isset($_SESSION['admin'])){
   include "config.php";
   $sql1 = "select * from product";
   $query=mysqli_query($con,$sql1);
   while($row = mysqli_fetch_array($query)){
  ?>
  <tr>
  <td><?=$row['id'];?></td>
    <td><?=$row['title'];?></td>
    <td><?=$row['authorname'];?></td>
    <td><?=$row['price'];?></td>
    <td><?=$row['sellingprice'];?></td>
    <td><?=$row['catrgory'];?></td>
    <td><?=$row['publication'];?></td>
    <td><?=$row['despription'];?></td>
    <td> <a href="../product/<?=$row['image']?>" target="_blank"><?=$row['image']?></a> </td>
    <td><a href="edit.php?id=<?=$row['id']?>">edit</a></td>
    <td><a href="delete.php?id=<?=$row['id']?>">delete</a></td>
   
  </tr>
  <?php
  }
    }
    else{
        header('location:add_cat.php');
    }
  ?>
    </table>
</body>
</html>