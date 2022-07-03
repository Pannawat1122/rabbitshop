<?php
include('conn.php');
$id= $_GET['id'];
$sql="SELECT * FROM `product` WHERE id='$id'";
$result = mysqli_query($con,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>รายละเอียดสินค้า</title>
  </head>
  <style>
  .add_cart{
     border:none;
     color:white;
     width:170px; 
     height:80px;
     background-color:#ff5833;
     border-radius:10px;
  }
  </style>
  <body>
    <?php while($row = mysqli_fetch_assoc ($result)): ?>
   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/product/<?php echo $row['img2']; ?>" class="d-block w-40" height="300" width="100%" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/product/<?php echo $row['img3']; ?>" class="d-block w-40" height="300" width="100%" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/product/<?php echo $row['img4']; ?>" class="d-block w-40" height="300" width="100%"  alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<h1 style="position:sticky;"><?php echo $row['name']; ?></h1>
<h3 style="text-align:right;color:red;margin-right:10px;"><?php echo $row['price']; ?>.00บาท<h3>
<h4 style="font-weight:bold;">รายละเอียดสินค้า</h4>
<p style="font-size:16px;"><?php echo $row['detail']; ?></p>
<h4 style="font-weight:bold;">ประเภทของสินค้า</h4>
<p style="font-size:16px;"><?php echo $row['type']; ?></p>
<a href="cart.php?p_id=<?php echo $row['id']; ?>&act=add"><button class="add_cart">เพิ่มลงตะกร้าสินค้า</button></a>
<?php endwhile; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>