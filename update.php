<?php
include('conn.php');
if(isset($_POST['name'])){
 $id=$_POST['id'];
$name = $_POST['name'];
 $price= $_POST['price'];
 $detail =$_POST['detail'];
 $no = $_POST['no'];
 $type = $_POST['type'];
 $pro=$_POST['new_pro'];
 $img1='img1'.$_POST['name'];
 $img2='img2'.$_POST['name'];
 $img3='img3'.$_POST['name'];
 $img4='img4'.$_POST['name'];
  
$dir1="image/product/";
$fileImage1=$dir1. basename('img1'.$_POST['name']);
$dir2="image/product/";
$fileImage2=$dir2. basename('img2'.$_POST['name']);
$dir3="image/product/";
$fileImage3=$dir3. basename('img3'.$_POST['name']);
$dir4="image/product/";
$fileImage4=$dir4. basename('img4'.$_POST['name']);
//echo $fileImage1;
 if($_FILES["new_img1"]["tmp_name"]!=""){
unlink($fileImage1);
move_uploaded_file($_FILES["new_img1"]["tmp_name"],$fileImage1);
 }
else if($_FILES["new_img2"]["tmp_name"]!=""){
unlink($fileImage2);
move_uploaded_file($_FILES["new_img2"]["tmp_name"],$fileImage2);
 }
 else if($_FILES["new_img3"]["tmp_name"]!=""){
unlink($fileImage3);
move_uploaded_file($_FILES["new_img3"]["tmp_name"],$fileImage3);
 }
 if($_FILES["new_img4"]["tmp_name"]!=""){
unlink($fileImage4);
move_uploaded_file($_FILES["new_img4"]["tmp_name"],$fileImage4);
 }
 else{
move_uploaded_file($_FILES["new_img1"]["tmp_name"],$fileImage1); 
move_uploaded_file($_FILES["new_img2"]["tmp_name"],$fileImage2);
move_uploaded_file($_FILES["new_img3"]["tmp_name"],$fileImage3);
move_uploaded_file($_FILES["new_img4"]["tmp_name"],$fileImage4);
 }
$sql="UPDATE product
SET name='$name',price='$price',type='$type',detail='$detail',no='$no',img1='$img1',img2='$img2',img3='$img3',img4='$img4',pro='$pro'
WHERE id=$id;
";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
	// javascript แสดงการ upload file
	
	if($result){
	
       echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'adminconsole.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to update again');";
	echo "</script>";
}

  }
 






?>