<?php
include "_navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
     <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
    <style>
        form{
        background-color:#3c84f066;
        border-radius:30px;
        max-width:500px;
        border:1px solid rgba(0, 0, 255, 0.707);
        margin:20px;
      }
      FORM H1{
        margin-LEFT:150px;
        COLOR:rgba(0, 0, 255, 0.707);
       
      }
      FORM H6{
        margin-LEFT:100px;
        COLOR:rgba(0, 0, 255, 0.707);
       
      }
      .mb-3 {
        margin:20px;
      }
      .row{
        margin:20px;
      }
      button{
        margin:20px;
        border-radius:30px;
      }
      .container{
        border:1px solid rgba(0, 0, 255, 0.707);
        padding-left:15px;
        padding-right:15px;
        }
    </style>
</head>
<body>
<!-- <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="img/logo.png" alt=""></a>
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="container">About </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ac</a>
        </li> 
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
            Refrence
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Sell Books
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        School
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
     
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="ri-user-fill"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="ri-search-line"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="ri-shopping-cart-2-line"></i></a>
        </li>
        </ul>
    </div>
  </div>
</nav> -->
    <form style="margin-top:200px" action="login.php" method="POST">
        <h1>Sign in</h1>
   <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputemail6"  class="col-form-label">Email</label>
  </div>
  <div class="col-auto">
    <input type="email" name="email"nid="inputemail6" class="form-control" aria-describedby="emailHelpInline">
  </div>
  
  </div>
   <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6"  class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password" name="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
   
  </div>
  
  </div>

  <!-- <button type="button" class="btn btn-primary"> Login</button>
  <button type="button" class="btn btn-primary">Login with Facebook</button> -->
  <input type="submit" Values="Login" class="btn btn-primary">
 <div class="container"></div>
 <h6><a href="signup.php"> Don't have an account! signup here.</a></h6>
</form>

</body>
</html>