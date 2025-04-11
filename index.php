
<?php
include "_navbar.php";
include "admin/config.php";
?>
<div id="carouselExampleAutoplaying" class="carousel slide main-seection" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4">
<?php
  $sql1= "select * from product";
  $query=mysqli_query($con ,$sql1);
  while($row=mysqli_fetch_array($query)){
  $p1 = $row['price'];
    $p2 = $row['sellingprice'];

    $dis = ($p1-$p2)*100/$p1;
    $dis = number_format($dis, 2);

  ?>
  <div class="col">
    <div class="card h-100">
      <img src="product/<?=$row['image']?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$row['title']?></h5>
        <p class="card-text ">
            <s> Rs. <?=$row['price']?></s>  <?=$dis?>%off<br>Rs. <?=$row['sellingprice']?></p>
        
    <a href="viewmore.php?id=<?=$row['id']?>"  class="card-link btn btn-primary"> Veiw More</a>
    <?php 
    if(isset($_SESSION['user'])){
      $email=$_SESSION['user'];
      $sql2="select * from signup where email='$email'";
      $query2=mysqli_query($con,$sql2);
      $row2=mysqli_fetch_array($query2);
      $uid=$row2['id'];
      $pid = $row['id'];

      $sql3="select* from cart where uid='$uid' and pid='$pid'";
    $query3=mysqli_query($con,$sql3);
    $count=mysqli_num_rows($query3);
    if($count==0){
      ?>
<a href="addcart.php?id=<?=$row['id']?>" class="card-link btn btn-primary">Add Cart</a>

      <?php
    }
  else{
?>

<a href="viewcart.php" class="card-link btn btn-primary">View Cart</a>


<?php
  }
    }
    else{
      ?>
<a href="addcart.php?id=<?=$row['id']?>" class="card-link btn btn-primary">Add Cart</a>
      
      <?php
    }
  ?>
  
      </div>
    </div>
  </div>
<?php
  }
?>
 
</div>
<div class="container about" id="about">
  <div class="row">
    <div class="col-md-6">
    <h1>About Us</h1>
  <p class="">Bookz Kart is the best online platform wisch deals with new <br>
      and old books of all fields, we deliver a constructive service to each and every<br>
       person of Jammu & Kastner to fresh the needs in terms of leaming, education and 
       <br>technologytlater will be providing industrist training by prouting them with<br>
        an anne platform where they can Buy and sell books for affortable price and even they<br> 
        can sell their old booksand also get bonis on Bok Kait is also providing home delivery<br>
         especially for Jammu and Kashmir State along with  hee shoping.
    </p>
      
</div>
<div class="col-md-6">
  <img src="img/banner3.png" class="img-fluid" alt="..." style="width:100%">
</div>
</div>
</div><br>
<?php
include "footer.php";
?>
  
    

</body>
</html>