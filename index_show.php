<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>show product </title>
  </head>
  <body>
  <?php
  include('conn.php');
$sql= "SELECT * FROM product WHERE pro = '1'";
$result = mysqli_query($con,$sql);
?>
    <h5>สินค้าแนะนำ</h5><br><br>
<div class="container">
    <div class="row">
 <?php while($row = mysqli_fetch_assoc($result)): ?>
<div class=" col col-sm-4" style="margin-bottom:10px;">
<div class="card" style="width:80%;">
  <img src="image/product/<?php echo $row['img1']; ?>" class="card-img-top" alt="..." width="50" height="80">
  <div class="card-body">
   <a href="showpro_detail.php?id=<?php echo $row['id']; ?>" style ="color:black; text-decoration:none"> <h5 class="card-title" style="text-align:right; margin: 10px;"><?php echo $row['name']; ?></h5></a>
   <h8><?php echo $row['detail']; ?></h8>  
<p><h7 style="color:#ff3333;font-weight:bold;" class="card-text"><?php echo $row['price'];?>.00</h7></p>
  </div><br>
</div>
    </div>

<?php endwhile; ?>
</div>
 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
-->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>