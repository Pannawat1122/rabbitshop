<?php
include('conn.php');
$id=$_GET['id'];
$sql="SELECT * FROM product WHERE id=$id";
$result= mysqli_query($con,$sql);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--spinner-->
    <link href="jquery.nice-number.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="jquery.nice-number.js"></script>
<script type="text/javascript">
$(function(){

  $('input[type="number"]').niceNumber();

});
</script>

    <title>edit product</title>
  </head>
  <style>
  button{
      background-color:#000000;
      color:#ffffff;
      border:none;
      outline:none;
      padding:0 10px;
      border-radius: 5px;


  }
  </style>
  <body>
    <h1>edit product</h1>
    <form name="frm_update" id="frm_update" method="post" enctype="multipart/form-data" action="update.php">
<table class="table">
  <thead>
    <tr>
      <th scope="col">รายการ</th>
      <th scope="col">การแก้ไข</th>
    </tr>
  </thead>
  <?php while($row=mysqli_fetch_assoc($result)): ?>
  <tbody>
  <tr>
<td><input type="hidden" id="id" name="id" value="<?php echo $id; ?>"></td>
  </tr>
    <tr>
      <td>ชื่อสินค้า:</td>
      <td><input type="text" class="form-control" value="<?php echo$row['name']; ?>"  name="name"/></td>
      <td></td>
    </tr>
    <tr>
      <td>จำนวนสินค้า:</td>
      <td><input type="number" class="form-control" name="no" min="0" max="1000" step="1" value="<?php echo $row['no']; ?>"  name="no"/></td>
      <td></td>
    </tr>
    <tr>
      <td>ราคา:</td>
      <td><center><input type="text" class="form-control" value="<?php echo $row['price'];?>" name="price"></center></td>
      <td></td>
    </tr>
    <tr>
    <td>หมวดหมู่สินค้า:</td>
    <td><select class="form-select" aria-label="ประเภท" name="type">
  <option selected><?php echo $row['type']; ?></option>
  <option value="ยาและเวชภัณฑ์">ยาและเวชภัณฑ์</option>
  <option value="ผลิตภัณฑ์เสริมอาหาร">ผลิตภัณฑ์เสริมอาหาร</option>
  <option value="ผลิตภัณฑ์เสริมความงาม">ผลิตภัณฑ์เสริมความงาม</option>
  <option value="เสื้อผ้าและกระเป๋า">เสื้อผ้าและกระเป๋า</option>
</select></td>
    <td></td>
     </tr>
         <tr>
      <td>รายละเอียด:</td>
      <td><textarea class="form-control"   name="detail" row="3"><?php echo$row['detail']; ?></textarea></td>
      <td></td>
    </tr>
    <tr>
      <td>ปกสินค้า:</td>
      <td><img src="image/product/<?php echo $row['img1']; ?>" width="15%"/></td>
      <td><lebel for="new img1">upload ภาพใหม่:</lebel><input type="file" class="form-control" name="new_img1" /></td>
      <td></td>
    </tr>
    <tr>
      <td>img2:</td>
      <td><img src="image/product/<?php echo $row['img2']; ?>" width="15%"/></td>
      <td><lebel for="new img2">upload ภาพใหม่:</lebel><input type="file" class="form-control" name="new_img2" /></td>
      <td></td>
    </tr>
    <td>img3:</td>
      <td><img src="image/product/<?php echo $row['img3']; ?>" width="15%"/></td>
      <td><lebel for="new img3">upload ภาพใหม่:</lebel><input type="file" class="form-control" name="new_img3" /></td>
      <td></td>
    </tr>
    <td>img4:</td>
      <td><img src="image/product/<?php echo $row['img4']; ?>" width="15%"/></td>
      <td><lebel for="new img4">upload ภาพใหม่:</lebel><input type="file" class="form-control" name="new_img4" /></td>
      <td></td>
    </tr>
    <tr>
  <td>ขึ้นหน้าหลัก:</td>
  <td><select class="form-select"  name="new_pro">
  <option selected><?php echo $row['pro']; ?></option>
  <option value="1">yes</option>
  <option value="0">no</option>
  </select></td>
  <td></td>
  <td></td>
    </tr>
<tr>
<td></td>
<td><button name="update" class="btn btn-success">อัพเดตข้อมูล</button></td>
<td></td>
</tr>

  </tbody>
  <?php endwhile; ?>
</table>
</form>
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