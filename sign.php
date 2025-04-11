<?php
session_start();
if(isset($_SESSION['user'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$password = $_POST['password'];
include "admin/config.php";
echo $sql= " insert into signup(fname,lname,email,phoneno,password)
 Values ('$fname','$lname','$email','$phoneno','$password')  ";
 
    $query = mysqli_query($con, $sql);
 if($query){
    header('location:signin.php');
}
else{
    echo "error";
}
}
else{
    header('location:signin.php');
}
?>










