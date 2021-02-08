<?php session_start();
	require_once("connection.php");
?>
<!doctype html>
<html>
<head>
	<style>
	  	.centered {
  			position: absolute;
    		top: 500px;
    		left: 500px;
    		width: 1000px;
    		height: 2000px;
			background-color: none;
	  	}
		
	  </style>
<meta charset="UTF-8">
<title>Form Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="Change Room/Change_room.php.css" rel="stylesheet" type="text/css">
</head>
<body>
	  <center><img src="Banner.jpg" width="1500" height="350" alt=""/></center>
	  <?php
	$idd=$_SESSION["UserID"];	
	$sql="SELECT * FROM dorm_student where id='$idd'";
	//echo $sql;
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result))
	{
		$id=$list["id"];
		$name=$list["name"];
		$email=$list["email"];
		$bed=$list["bed"];
		$room=$list["room"];
		$floor=$list["floor"];
		$building=$list["building"];
		$email=$list["email"];
	    //echo "$id : $name : $email : $bed : $room  : $building <br>";
	}
		
?>
	  <table width="1500" border="0" align="center"  cellspacing="0">
	  	<tr>
		<td width="86" height="54" bgcolor="#8C8989"><center><a href="หน้าแรก.php"><FONT Face="Cloud" size="5" color="#000000">หน้าแรก</Font></a></center></td>
		<td width="86" height="54" bgcolor="#757575"><center><FONT Face="Cloud" size="5"><a href="room_stat.php"><FONT Face="Cloud" size="5" color="#000000">เปลี่ยนห้อง</Font></a></center></td>
		<td width="86" height="54" bgcolor="#8C8989"><center><FONT Face="Cloud" size="5"><a href="form_fix.php"><FONT Face="Cloud" size="5" color="#000000">แจ้งซ่อม</Font></a></center></td>
		<td width="86" height="54" bgcolor="#757575"><center><FONT Face="Cloud" size="5"><a href="personal_information.php"><FONT Face="Cloud" size="5" color="#000000">ข้อมูลส่วนตัว</Font></a></center></td>
		</tr>
		</table>
	<center><img src="WebBg.jpg" width="1500" height="1200" alt=""/></center>
	<div class="centered">
		<br><br><br>
    <center><h1><FONT Face="Cloud" size="12">You are Student </FONT></h1></center>
	<table width="550" border="0" align="center" cellpadding="3" cellspacing="100">
  <tr>
    <td align="center" class="b14"><div class='blue' align='center'><br>
		<font Face="Cloud Light" size="5">นิสิตชื่อ : </font><b><FONT Face="Cloud Light" size="5"><?php echo "$name"?></font></b> <br><br><br>
		<FONT Face="Cloud Light" size="5">ปัจจุบันพักอยู่ที่ : เตียง </font><b><FONT Face="Cloud Light" size="5"><?php echo "$bed"?></font></b> <FONT Face="Cloud Light" size="5">ห้อง </font><b><FONT Face="Cloud Light" size="5"><?php echo "$room"?></font></b><br><br><br><FONT Face="Cloud Light" size="5"> ชั้น </font><b><FONT Face="Cloud Light" size="5"><?php echo "$floor"?></font></b><FONT Face="Cloud Light" size="5"> ตึก </font><b><FONT Face="Cloud Light" size="5"><?php echo "$building"?></font></b><br><br><br>
    <p>&nbsp;</p>
		<p><a href="logout.php"><FONT Face="Cloud Light" size="5">Log out</font></strong></a></p>
    <p>&nbsp;</p>
		</div>
</body>
</html>