<?php
include "config.php";
session_start();
if(isset($_SESSION['admin'])){
$id= $_POST['id'];
    $title = $_POST['title'];
 $authorname = $_POST['authorname'];
 $price = $_POST['price'];
 $caterory= $_POST['cat'];
 $publication = $_POST['publication'];
 $despription= $_POST['despription'];

 $image = $_FILES['image']['name'];
    if($image == ''){
 $sql="update product set title='$title', authorname='$authorname', price='$price',catrgory='$caterory',
  publication='$publication',despription='$despription' where id ='$id'";
  $query = mysqli_query($con,$sql);
  if ($query){
    echo "sucess";
}
else{
    "error";
}
    }
    else{
        

        $sql ="select * from  product where id = '$id'";
        $query = mysqli_query($con,$sql);
$row= mysqli_fetch_array($query);
        $image = $row['image'];
        unlink("../product/". $image);


        

 $image = $_FILES['image']['name'];

 $fileName = basename($_FILES['image']['name']);
 
   $image = $_FILES['image']['tmp_name'];
 
   $temp1 = explode(".", $_FILES['image']['name']);
 
 $newfilename1 = round(microtime(true)) . rand(1,999) .'.' . end($temp1);
 
 $targetFilePath ='../product' . $fileName;
 
   $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
 
   if (move_uploaded_file($_FILES['image']['tmp_name'], '../product/' . $newfilename1)){
 }
 
 $sql="update product set title='$title', authorname='$authorname', price='$price',catrgory='$caterory',
 publication='$publication',despription='$despription', image = '$newfilename1' where id ='$id'";
 $query = mysqli_query($con,$sql);
 if ($query){
   echo "sucess";
}
else{
   "error";
}   

    }

}
else{
    header('location: view.php');
}
?>