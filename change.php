<?php session_start();
	require_once("connection.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php	$idd=$_SESSION["UserID"];
	$room=$_GET['room'];
	$bed=$_GET['bed'];
	$sql="SELECT * FROM room where room_num='$room'";
	$result=mysqli_query($db,$sql);
	$list=mysqli_fetch_array($result);
	$floor=$list["floor"];
	$sql2="SELECT * FROM dorm_student Where room='$room' AND bed='$bed' AND floor='$floor' ";
	$result2=mysqli_query($db,$sql2);
	date_default_timezone_set('Asia/Bangkok');
	$date = date('m/d/Y h:i:s a', time());
	$sql4="SELECT * FROM dorm_student Where id='$idd' ";
	$result4=mysqli_query($db,$sql4);
	$list4=mysqli_fetch_array($result4);
	$room1=$list4["room"];
	$bed1=$list4["bed"];
	if(mysqli_num_rows($result2)==0){
		$sql3="INSERT INTO change_room(id,date_change_room,room_old,bed_old,room_new,bed_new) VALUES('$idd','$date','$room1','$bed1','$room','$bed')";
		$result3=mysqli_query($db,$sql3);
		$sql5="UPDATE change_room SET date_out='$date' WHERE id='$idd' AND room_new='$room1' AND bed_new='$bed1'  ";
		$result5=mysqli_query($db,$sql5);
		$query ="UPDATE dorm_student SET room='$room',bed='$bed',floor='$floor',status='N' WHERE id='$idd' ";
		mysqli_query($db,$query);
  		echo "<script>";
  		echo "window.history.back()";
  		echo "</script>";}
	
	else{
		echo "<script>";
		echo "alert(\" ห้องดังกล่าวมีคนเลือกแล้ว โปรดเลือกห้องใหม่อีกครั้งค่ะ \");";
  		echo "window.history.back()";
  		echo "</script>";}
	
	?>
</body>
</html>