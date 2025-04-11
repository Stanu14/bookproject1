<?php

session_start();
if(isset($_SESSION['admin'])){
include "config.php";
$id=$_POST['id'];
$status=$_POST['status'];
$sql = "UPDATE `orders` SET  status ='$status' where id = '$id'";
$query=mySqli_query($con,$sql);

if($query){
    ?>
    <script>
         alert("success")
         window.history.go(-1);
    </script>
<?php
}
else{
    echo "error";
}
}
?>