<?php
include "config.php";
$id=$_GET['id'];
$sql="select * from product  where id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<style>
    .mb-3{
    background-color:rgba(143, 191, 238, 0.367);
}
form{
            margin-left:100px;
            margin-right:100px;
        }
</style>
<body>
    <form action="Eupdate.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value ="<?= $id ?>">
  

  


 <div class="mb-3">
    <label for="exampleInputTile" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" value="<?=$row['title']?>" id="exampleInputTitle1">
  </div>
  <div class="mb-3">
    <label for="exampleInputAuthorname" class="form-label">Authorname</label>
    <input type="text" class="form-control" name="authorname" value="<?=$row['authorname']?>"  id="exampleInputAuthorname1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" value="<?=$row['price']?>"  id="exampleInputPrice">
  </div>
  
  
  <div class="mb-3">
    <label for="exampleInputCategroy1" class="form-label">Categroy</label>
   <select name="cat"  id="" class="form-control" required>
    <option value="">Select Cat</option>
        <?php   
         $sql1 = "select * from catrgory";
         $query1=mySqli_query($con,$sql1);
         while($row1 =mysqli_fetch_array($query1)){
          ?>
    <option value="<?php  echo $row1['id'] ?>"><?php  echo $row1['catrgory'] ?></option>
    <?php
         }
         ?>
            </select>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputImage" class="form-label">Image</label>
    <input type="file" class="form-control" name="image" id="exampleInputImage1">
  </div>
  <div class="mb-3">
    <label for="exampleInputpublication" class="form-label">Publication</label>
    <input type="text" class="form-control" name="publication"  value="<?=$row['publication'] ?>" id="exampleInputPublication1">
  </div>
 
  <div class="mb-3">
    <label for="exampleInputDesprition1" class="form-label">Despription</label>
    <!-- <input type="text" class="form-control" id="exampleInputDesprition1"> -->
     <textarea class="form-control" name="despription"  id="exampleInputDesprition1"><?=$row['despription']?></textarea>
  </div>
  <div class="d-grid gap-2">
 
  <!-- <button class="btn btn-primary" type="button">Button</button> -->
   <input type="submit" class="btn btn-primary" value="Update Product">
  
  </div>   
  
  


    </form>
</body>
</html>