<?php
include "admin/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
      .mb-3{
        margin:30px;
       
      }
      form{
        background-color:#3c84f066;
        border-radius:30px;
        max-width:500px;
        border:1px solid rgba(0, 0, 255, 0.707);
        margin-top:150px;
        margin-left:50px;
      }
      .btn {
        margin-left:150px;
        padding-left:25px;
      }
      FORM H1{
        margin-LEFT:150px;
        COLOR:rgba(0, 0, 255, 0.707);
       
      }
    </style>
</head>
<body>
    <?php
    include "_navbar.php";
    ?>
<form action="changeback.php" method="POST">
  <h1>Confirm  Password</h1>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-text" id="exampleInputPassword1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputnewPassword1" class="form-label"> New Password</label>
    <input type="password" name="newpassword" class="form-text" id="exampleInputnewfPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputconfPassword1" class="form-label">Confirm Password</label>
    <input type="password" name="confirmpassword" class="form-text" id="exampleInputconfPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
