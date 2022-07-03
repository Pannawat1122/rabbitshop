<?php
$id = $_GET['id'];
include('conn.php');
$sql1 = "SELECT img1,img2,img3,img4 FROM product WHERE id = $id";
$query1 = mysqli_query($con,$sql1);
while($row = mysqli_fetch_assoc($query1)):
$dir="image/product/";
$fileImage1=$dir.$row['img1'];
$fileImage2=$dir.$row['img2'];
$fileImage3=$dir.$row['img3'];
$fileImage4=$dir.$row['img4'];
unlink($fileImage1);
unlink($fileImage2);
unlink($fileImage3);
unlink($fileImage4);
endwhile;
$sql2 = "DELETE FROM product WHERE id= $id";
$query2 = mysqli_query($con,$sql2);
if($query2){
	
       echo "<script type='text/javascript'>";
	echo "alert('ลบสินค้าเรียบร้อย');";
	echo "window.location = 'adminconsole.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('ลบสินค้าไม่สำเร็จ');";
	echo "</script>";
}
?>