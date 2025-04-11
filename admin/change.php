<?php

session_start();
// if(isset($_SESSION['admin']))
{
    $email = $_SESSION['admin'];
 $password = $_POST['password']; 
 $newpassword= $_POST['newpassword'];
 $connewpassword= $_POST['connewpassword'];
include "config.php";

$sql1 = "Select * from admin where email = '$email' and  password = '$password'";
$query1 = mysqli_query($con, $sql1);

$count = mysqli_num_rows($query1);


if($count == 1){



                if($newpassword==$connewpassword) 
                    {
                        
                $sql="update admin set password = '$newpassword' where email = '$email'" ;
                $query = mysqli_query($con,$sql);
                if($query){
                  header('location:adim.php');
                }
                else{
                    echo "error";
                }
                    }
                    else{
                        echo "password mismatch";
                    }
}
else{
    echo " old password  not matched";
}
}
?>
