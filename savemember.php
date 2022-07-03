<?php
include('conn.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$fullname = $_POST["name"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$phone=$_POST["phone"];
	
	//ตรวจสอบการซ้ำ
	$query="SELECT username FROM login WHERE username='$username'";
	$user=mysqli_query($con,$query) or die ("Error in query: $query " . mysqli_error());
	if(mysqli_num_rows($user) > 0){
	   echo "<script type='text/javascript'>";
	echo "alert('ขออภัย มีคนใช้ชื่อผู้ใช้นี้แล้ว');";
	echo "window.location = 'signup.php'; ";
	echo "</script>";
	}
	else{
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO login(username,password,name,address,phone,email)
			 VALUES('$username', '$password', '$fullname','$address','$phone','$email')";
 
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	echo "<script type='text/javascript'>";
	echo "alert('Sign-up Succesfuly');";
	echo "window.location = 'login.php'; ";
	echo "</script>";
	
	
}
?>