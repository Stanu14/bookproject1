<?php
include "config.php";
$id = $_GET['id'];



$sql ="select * from  product where id = '$id'";
$query = mysqli_query($con,$sql);
$row= mysqli_fetch_array($query);
$image = $row['image'];
unlink("../product/". $image);




 $sql = "delete from product where id ='$id'";
$query=mysqli_query($con,$sql);
// unlink("../product/". $image);
if($query){
    ?>
    <script>
    alert("success");
    window.location.href = "view.php";
  </script>
  <?php
}
else{
    echo "error";
}
?>
