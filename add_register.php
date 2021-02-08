<?php

require_once("connection.php");
$id=$_GET['id'];
$password=$_GET['password'];
$name=$_GET['name'];
$email=$_GET['email'];
$tel=$_GET['tel'];
$address=$_GET['address'];
$building='ชวนชื่น';
$sql="SELECT * FROM dorm_student WHERE id='$id'";
$result=mysqli_query($db,$sql);
$list=mysqli_fetch_array($result);
//echo mysqli_num_rows($result);
if(mysqli_num_rows($result)==1){
$approve=$list["approve"];
	if ($approve=="P"){echo "<script>";
		echo "alert(\" ขออภัย IDที่ใช้ยังอยู่ในระบบ \");";
  		echo "window.history.back()";
  		echo "</script>";}
	if ($approve=="F"){
		$sql1="DELETE FROM dorm_student WHERE id='$id'";
		$result1=mysqli_query($db,$sql1);
		$sql2="INSERT INTO dorm_student(id,password,name,email,tel,address,building) VALUES('$id','$password','$name','$email','$tel','$address','$building')";
		$result2=mysqli_query($db,$sql2);
		echo "<script>";
		echo "alert(\" ลงทะเบียนเสร็จสมบูรณ์ \");";
		echo "window.location.href='form_login.php';";
  		echo "</script>";}
	if ($approve==""){echo "<script>";
		echo "alert(\" ขออภัย IDที่ใช้กำลังรอผลลงทะเบียน \");";
  		echo "window.history.back()";
  		echo "</script>";}
		
}
else{
$sql3="INSERT INTO dorm_student(id,password,name,email,tel,address,building) VALUES('$id','$password','$name','$email','$tel','$address','$building')";
//echo "$id : $password : $name : $email : $tel : $address : $building  <br>";
$result3=mysqli_query($db,$sql3);
header("Location: form_login.php");
}
?>