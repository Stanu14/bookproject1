<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    

    <title>Document</title> -->
    <style>
        form{
          margin-top:150px;
            margin-left:150px;
            margin-right:150px;
        }
    </style>
<!-- </head>
<body> -->
<?php
include "_navbar.php";
?>
<form>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Full Name</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pin Code</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Book Name</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Publications</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
  
    <div class="d-grid gap-2">
  <button class="btn btn-primary" type="button">Submit</button>
  <!-- <button class="btn btn-primary" type="button">Button</button> -->
</div>
 
  
</form>
</body>
</html>