<?php
include "config.php";
session_start();
if(isset($_SESSION['admin'])){
    $title = $_POST['title'];
 $authorname = $_POST['authorname'];
 $price = $_POST['price'];
 
 $caterory= $_POST['cat'];

 $publication = $_POST['publication'];
 $despription= $_POST['despription'];



 $image = $_FILES['image']['name'];

$fileName = basename($_FILES['image']['name']);

  $image = $_FILES['image']['tmp_name'];

  $temp1 = explode(".", $_FILES['image']['name']);

$newfilename1 = round(microtime(true)) . rand(1,999) .'.' . end($temp1);

$targetFilePath ='../product' . $fileName;

  $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

  if (move_uploaded_file($_FILES['image']['tmp_name'], '../product/' . $newfilename1)){
}

$sellingprice=$_POST['sellingprice'];

 $sql = "INSERT into product(authorname,price,catrgory,publication,despription,image,title,sellingprice) VALUES
('$authorname','$price','$caterory','$publication','$despription','$newfilename1','$title','$sellingprice')";
$query = mysqli_query($con, $sql);
if($query){
    echo "success";
}
else{
    echo "error";
}
}
else{
header('location:login.php');

}
?>

