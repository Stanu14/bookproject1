<?php
session_start();
 $email = $_POST['email'];
 $password = $_POST['password'];

 include "config.php";
 $sql1 = "Select * from admin where email = '$email' and  password='$password'";
 $query1 = mysqli_query($con, $sql1);
 
 $count = mysqli_num_rows($query1);
 
 
 if($count > 0){
 
    $_SESSION['admin']=$email;
 echo  "login success";

 header('location:adim.php');
              
 }
 else{
     echo "incorrect usernamme or password";
 }
  

  
?>