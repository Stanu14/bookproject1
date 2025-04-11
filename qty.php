<?php
session_start();
if(isset($_SESSION['user'])){
include "admin/config.php";
$email = $_SESSION['user'];
$sql = "select * from signup where email = '$email'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
$uid = $row['id'];
$id=$_POST['id'];
$quantity=$_POST['quantity'];
 $sql="update cart SET qty='$quantity' WHERE id = '$id' and uid = '$uid'";
$query= mysqli_query($con,$sql);
if($query){
    header('location:viewcart.php');
}

else{
    echo "error";
}
}
else{
    header('location:signin.php');
}
?>