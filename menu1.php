<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>rabbitshop</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Rabbitshop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buy.php">สั่งซื้อสินค้า</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">ติดต่อเรา</a>
        </li>
         <li class="nav-item">
          <h7 class="nav-link">welcome user : <?php echo $_SESSION['User_name']; ?></h7>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Log_out.php">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--jQuery -->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>-->

<!-- Bootstrap JS -->
 </body>
 </html>