<?php
include "admin/config.php";
session_start();
if(isset($_SESSION['user']))
{
    $email = $_SESSION['user'];
 $password = $_POST['password']; 
 $newpassword= $_POST['newpassword'];
 $confirmpassword= $_POST['confirmpassword'];


$sql1 = "Select * from signup where email = '$email' and  password = '$password'";
$query1 = mysqli_query($con, $sql1);

$count = mysqli_num_rows($query1);


if($count == 1){



                if($newpassword==$confirmpassword) 
                    {
                        
                $sql="update signup set password = '$newpassword' where email = '$email'" ;
                $query = mysqli_query($con,$sql);
                if($query){
                  header('location:index.php');
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
