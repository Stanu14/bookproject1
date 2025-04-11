<?php
session_start();
if(isset($_SESSION['user'])){
include "admin/config.php";
$email = $_SESSION['user'];
$sql = "select * from signup where email = '$email'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
$uid = $row['id'];
$id=$_GET['id'];
// $quantity=$_POST['quantity'];
 $sql = "delete from cart where id ='$id' and uid = '$uid' ";
$query= mysqli_query($con,$sql);
if($query){
    ?>
    <script>
    alert("success deleted");
    window.location.href = "viewcart.php";

   
  </script>
  <?php
}

else{
    echo "error";
}
}
else{
    header('location:signin.php');
}
?>