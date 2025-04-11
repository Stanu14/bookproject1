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
    
    <style>
      .mb-3{
        margin:30px;
       
      }
      form{
        background-color:#3c84f066;
        border-radius:30px;
        max-width:500px;
        border:1px solid rgba(0, 0, 255, 0.707);
        margin:30px;
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
<form action="sign.php" method="POST">
  <h1>SIGN UP</h1>
  <div class="mb-3" style="padding-top:20px;">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"  name="email" class="form-text" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputfirst1" class="form-label">First Name</label>
    <input type="name" name="fname" class="form-text" id="exampleInputfirst1">
  </div>
  <div class="mb-3">
    <label for="exampleInputlast1" class="form-label">Last Name</label>
    <input type="name" name="lname" class="form-text" id="exampleInputlast1">
  </div>
  <div class="mb-3">
    <label for="exampleInputphone1" class="form-label">Phnone No</label>
    <input type="number" name="phoneno" class="form-text" id="exampleInputphone1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-text" id="exampleInputPassword1">
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
