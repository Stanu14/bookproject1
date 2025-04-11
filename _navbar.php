
<?php
if(!isset($_SESSION)){
  session_start();
  }
include "admin/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>
  .search{
display : none;
  }
</style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>


     <link rel="stylesheet" href="style.css">

</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="img/logo.png" alt=""></a>
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#about">About </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Ac</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Acadmic Books
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
         
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Category
          </a>

          <ul class="dropdown-menu">
          <?php
        
        $sql1 = "select * from catrgory";
$query=mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($query)){
 ?>
            <li><a class="dropdown-item" href="cat.php?id=<?=$row['id']?>"><?=$row['catrgory']?></a></li>
            <?php
}
?>
          </ul>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="sell.php" 
          >
         Sell Books
          </a>
          <!-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="orders.php" >
        Orders
          </a>
          <!-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
        </li>
     
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="ri-user-fill"></i>
          </a>
          <ul class="dropdown-menu">
          
            <?php
            
            if(isset($_SESSION['user'])){
            ?>
            <li><a class="dropdown-item" href="signup.php">Signup</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            <li><a class="dropdown-item" href="changepassword.php">Change Password</a></li>
            <?php
            }
            else{
            ?>
              <li><a class="dropdown-item" href="signin.php">Login</a></li>

              <?php
            }
              ?>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active">
            <span><i class="ri-search-line" onclick="remove()"></i></span>
          <form action="search.php"  class="search" id="search"  method="POST">
        <input type="search" name="search">
        <!-- <input type="submit" name="Submit"> -->
        <button type="submit"><i class="ri-search-line"></i></button>
    </form>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="viewcart.php"><i class="ri-shopping-cart-2-line"></i></a>
        </li>
        </ul>
    </div>
  </div>
</nav>


<script>

function remove() {
  $('.active').click(function(){
    $('.active form').removeClass('search');
    $('.active span').addClass('search')
    
});

}
</script>
