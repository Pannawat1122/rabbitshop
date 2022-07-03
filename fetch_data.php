<?php
include('conn.php');
if(isset($_POST["action"])){
    $query = "SELECT * FROM product WHERE pro IN(1,0)";
    if(isset($_POST["type"])){
        $type_filter = implode("','", $_POST["type"]);
        $query .= "AND type IN ('".$type_filter."')";
    }
if(isset($_POST["find"])){
    $search = $_POST["find"];
    $query ="SELECT * FROM product WHERE name LIKE '$search' ";
    }
if(isset($_POST["minimum_price"])){
$min = $_POST["minimum_price"];
$max = $_POST["maximum_price"];
$query .= "AND price BETWEEN '$min' AND '$max' ";
}
    $sql = mysqli_query($con,$query);
    if($sql)
 {
  foreach($sql as $row)
  {
    
   echo'<div class=" col col-sm-4" style="margin-bottom:10px;">
   <div class="card" style="width:80%;">
     <img src="image/product/'. $row['img1'].'" class="card-img-top" alt="..." width="50" height="80">
     <div class="card-body">
      <a href="showpro_detail.php?id='.$row['id'].'" style ="color:black; text-decoration:none"> <h5 class="card-title" style="text-align:right; margin: 10px;">'.$row['name'].'</h5></a>
      <h8>'. $row['detail'].'</h8>  
   <p><h7 style="color:#ff3333;font-weight:bold;" class="card-text">'.$row['price'].'.00</h7></p>
     </div><br>
   </div>
       </div>';
 
  }
}
else
 {
  echo '<h3>ไม่พบสินค้า</h3>';
 }
}
?>