<?php 
include "admin/config.php";
// session_start();
// if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style.css">
     <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>
</head>
<body>
    <?php
    include "_navbar.php";
    $id=$_GET['id'];
    $sql="select * from product where id= '$id'";
    $query=mysqli_query($con,$sql);
   $row = mysqli_fetch_array($query)
    ?>
    <div class="container" style="padding-top:130px">
        <div class="row">
        <div class="col-md-4">

            <img src="product/<?=$row['image']?>" class="card-img-top" alt="..." style="width:100%">
         </div>
        <div class="col-md-8" style="padding-top:100px">
              <h3>tittle:<?=$row['title']?></h3>
              <h4>publication:<?=$row['publication']?></h4>
              <h4>authorname:<?=$row['authorname']?></h4>
              <h4>price:<?=$row['price']?></h4>
              <h4>sellingprice:<?=$row['sellingprice']?></h4>
              <a href="addcart.php?id=<?=$row['id']?>" class="card-link btn btn-primary">Add Cart</a>
              <a href="#" class="card-link btn btn-primary">Buy Now</a>
  
  


        </div>
</div>
    </div>
</body>
</html>
<?php 
// }
// else{
//     header('location:signin.php');
// }
?>
