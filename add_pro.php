<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>add new product</title>
  </head>
  <body>
    
      <h1>Add new product</h1><br><br>
<form  method="post" action="insert.php" enctype="multipart/form-data" name="upload" id="upload"> 
<label for="name">ชื่อสินค้า :</label> <input type="text" name="name" class="form-control" placeholder="ชื่อสินค้า" required ><br>
<label for="price">ราคาสินค้า :</label> <input type="number" name="price" class="form-control" placeholder="ราคาสินค้า" required ><br>
<label for="type">ประเภทของสินค้า :</label> <select class="form-select" aria-label="ประเภท" name="type">
  <option selected>เลือกหมวดหมู่</option>
  <option value="ยาและเวชภัณฑ์">ยาและเวชภัณฑ์</option>
  <option value="ผลิตภัณฑ์เสริมอาหาร">ผลิตภัณฑ์เสริมอาหาร</option>
  <option value="ผลิตภัณฑ์เสริมความงาม">ผลิตภัณฑ์เสริมความงาม</option>
  <option value="เสื้อผ้าและกระเป๋า">เสื้อผ้าและกระเป๋า</option>
</select><br>
<label for="detail">รายละเอียดสินค้า :</label><textarea class="form-control" name="detail" required rows="3" placeholder="รายละเอียด  ไม่เกิน 255 ตัวอักษร"></textarea><br>
<label for="no">จำนวนสินค้า :</label> <input type="number" name="no" class="form-control" placeholder="จำนวนสินค้า" ><br>
<label for="img1">รูปปกสิค้า:</label> <input type="file" name="img1" class="form-control" placeholder="เลือกรูปที่ 1" ><br>
<label for="img2">รูป2:</label> <input type="file" name="img2" class="form-control" placeholder="เลือกรูปที่ 2"  ><br>
<label for="img3">รูป3:</label> <input type="file" name="img3" class="form-control" placeholder="เลือกรูปที่ 1"  ><br>
<label for="img4">รูป4:</label> <input type="file" name="img4" class="form-control" placeholder="เลือกรูปที่ 2"  ><br>
<label for="type">ขึ้นหน้าหลัก :</label> <select class="form-select"  name="pro">
  <option selected>ขึ้นหน้าหลัก</option>
  <option value="1">yes</option>
  <option value="0">no</option>
  </select><br>
  <input type="submit" name="save"  value="เพิ่มสินค้า" class ="btn btn-primary" />
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