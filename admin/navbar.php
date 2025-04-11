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
    .col-md-3{
    background-color:rgba(0, 0, 255, 0.433);
   
}
.nav-link{
    color: black !important;;
}
</style>
<body>
<div class="row">
    <div class="col-md-3">
        <h2>Admin Panel</h2>
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="adim.php">Add Product</a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cateogry.php" >Categroy</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="view.php">update product</a>
  </li>
  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Orders
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="placed.php">Placed</a></li>
            <li><a class="dropdown-item" href="confirm.php">Confirmed</a></li>
            <li><a class="dropdown-item" href="cancelled.php">cancelled</a></li>
            <li><a class="dropdown-item" href="delivered.php">delived</a></li>
          </ul>
        </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Remove</a>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li> -->
</ul>
<button class="btn btn-primary"  style="max-width:147px;"><a href="changepass.php" style="color:#fff">Changepassword</a></button>

</div>
    

</body>
</html>