<?php
session_start();
if(isset($_SESSION['user'])){

include "admin/config.php";



$email = $_SESSION['user'];
$sql = "Select * from signup where email = '$email' ";

$query= mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$uid = $row['id'];

?>

<style>
    table{
        background-color:rgba(165, 165, 235, 0.274);
        border-radius:15px;
    }
</style>

    <?php
    include "_navbar.php";
    ?>
<div class="container" style='padding-top:200px'>
    <table style="width:100%">
        <tr>
            <th>Image</th>
            <th>item Name</th>
            <th>MRP/ SP</th>
            <th>Quanlity 
 </th>
            <th>total</th>
        </tr>
        <?php
        $tot = 0;
            $sql = "select * from cart where uid = '$uid'";
            $query = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($query)){
                $pid = $row['pid'];

                $sql1= "select * from product where id= '$pid'";
                $query1 = mysqli_query($con, $sql1);
                $row1 = mysqli_fetch_array($query1);
        ?>
        <tr>
            <td><img src="product/<?=$row1['image']?>" class="card-img-top" alt="..." style="height:100px "></td>
            <td><?=$row1['title']?></td>
            <td><?=$row1['price']?>/<?=$row1['sellingprice']?></td>

            <td> <form class="" action="qty.php" method="POST" >

<input type="hidden" name="id" value="<?=$row['id']?>">
<input type="number" name="quantity" value="<?=$row['qty']?>">
<!-- <input type="submit" value="<i class='ri-refresh-line'></i>"> -->
 <button type="submit"><i class="ri-refresh-line"></i></button>
</form>
<button  onclick="myFunction(<?=$row['id']?>)" ><i class="ri-close-line"></i></button>
<script>
    // alert("success deleted");
    // window.location.href = "viewcart.php";
    // window.
    function myFunction(id) {
        if (confirm("Do you want to Delete?") == true) {
            window.location.href="close.php?id="+id;
  } else {
    
  }

    
    }
  </script>
</td>
            <td><?= $t = $row1['sellingprice']*$row['qty']?></td>
        </tr>
        <?php
        $tot = $tot + $t;
            }
        ?>
    </table>

    <h4 style="text-align:right">Total: Rs.<?=$tot?></h4><br>
     <a  href="buynow.php" class="card-link btn btn-primary" style="float:right">Buy Now</a>
</div>
   
</body>
</html>

<?php
}
else{
    header('location:signin.php');
}
?>