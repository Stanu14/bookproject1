<?php  
include "config.php" 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

     <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>-->
    <style> 
.col-md-3{
    background-color:rgba(0, 0, 255, 0.433);
    /* height: 100%!important; */
}
.nav-link{
    color: black !important;;
}
.col-md-9{
    background-color:rgba(143, 191, 238, 0.367);
}
form{
            margin-left:100px;
            margin-right:100px;
        }
    </style>
    <title>Document</title>
</head>
<body> 
<?php
session_start();
include "navbar.php";
?>
<div class="col-md-9">


<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Descrption</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Price Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product Images</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product Information</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<form class="" action="discrption.php" method="POST"  enctype="multipart/form-data">

  


 <div class="mb-3">
    <label for="exampleInputTile" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="exampleInputTitle1">
  </div>
  <div class="mb-3">
    <label for="exampleInputAuthorname" class="form-label">Authorname</label>
    <input type="text" class="form-control" name="authorname" id="exampleInputAuthorname1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" id="exampleInputPrice">
  </div>
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">SellingPrice</label>
    <input type="text" class="form-control" name="sellingprice" id="exampleInputsellingPrice">
  </div>
  
  
  <div class="mb-3">
    <label for="exampleInputCategroy1" class="form-label">Categroy</label>
   <select name="cat"  id="" class="form-control" required>
    <option value="">Select Cat</option>
        <?php   
         $sql = "select * from catrgory";
         $query=mySqli_query($con,$sql);
         while($row =mysqli_fetch_array($query)){
          ?>
    <option value="<?php  echo $row['id'] ?>"><?php  echo $row['catrgory'] ?></option>
    <?php
         }
         ?>
            </select>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputpublication" class="form-label">Publication</label>
    <input type="text" class="form-control" name="publication" id="exampleInputPublication1">
  </div>
  <div class="mb-3">
    <label for="exampleInputImage" class="form-label">Images</label>
    <input type="file" class="form-control" name="image" id="exampleInputImage1">
  </div>
 
  <div class="mb-3">
    <label for="exampleInputDesprition1" class="form-label">Despription</label><br>
    <!-- <input type="text" class="form-control" id="exampleInputDesprition1"> -->
     <textarea class="form-control" name="despription" id="exampleInputDesprition1"></textarea>
  </div>
  
  <div class="d-grid gap-2">
 
  <!-- <button class="btn btn-primary" type="button">Button</button> -->
   <input type="submit" class="btn btn-primary" value="Add Product">
  
  </div>   
  
  
</form>
</div>

</div>
</body>
</html>