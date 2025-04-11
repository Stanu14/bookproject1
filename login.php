<?php
session_start();
if(!isset($_SESSION['user'])){
$email=$_POST['email'];
$password=$_POST['password'];
include "admin/config.php";
$sql = "Select * from signup where email = '$email' and  password='$password'";
 $query= mysqli_query($con, $sql);
 
 $count = mysqli_num_rows($query);
 
 
 if($count > 0){
 

 echo  "login success";
 $_SESSION['user']= $email;

 header('location:index.php');
              
 }
 else{
     echo "incorrect usernamme or password";
 }
}
else{
    header('location:index.php');
}


?>