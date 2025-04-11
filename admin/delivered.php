<?php
include"config.php";
session_start();
if(isset($_SESSION['admin'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            /* background-color:rgba(165, 165, 235, 0.274); */
        border-radius:15px;
    
         
            margin-left:50PX;
            margin-RIGHT:50px;
            width:90%;
        }
        .col-md-9{
    background-color:rgba(143, 191, 238, 0.367);
}
    </style>
</head>
<body>
    <?php
    include "navbar.php";
    ?>
<div class="col-md-9">
    <table>
    <tr>
    <th style="margin-left :10px;">PName</th>
            <th>AuthorName</th>
            <th>MRP</th>
            <th>SP</th>
            <th>QTY</th>
            <th>Date</th>
            <th>Address</th>
            <th>Status</th>
        </tr>
        <tr>
            <?php
            
             $sql2 = "Select * from orders where status = 'delivered' ";
           
        $query2=mysqli_query($con,$sql2);
        while($row2=mysqli_fetch_array($query2)){

        $pid=$row2['pid'];
        
        $sql="select * from product where id='$pid' ";
        $query=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($query);

         ?>

         <td><?=$row['title']?></td>
         <td><?=$row['authorname']?></td>
         <td><?=$row2['price']?></td>
         <td><?=$row2['sp']?></td>
         
         <td><?=$row2['qty']?></td>
         <td><?=$row2['date']?></td>
         <td><?=$row2['address']?></td>

         <td>   

                <form action="statusupdate.php" method="POST">
                    <input type="hidden" name= 'id' value="<?=$row2['id']?>">
                    <select name = "status">
                            <option value="placed">placed</option>
                            <option value="confirmed">confirmed</option>
                            <option value="cancelled">cancelled</option>
                            <option value="delivered">delivered</option>
                        </select>
                     
                        <input type="submit" value="Submit">
                    
                </form>

         </td>
        </tr>
        <?php
        }
        ?>
</table>
</div>
</body>
</html>
<?php 
}
else{
    header('location:login.php');
}
?>