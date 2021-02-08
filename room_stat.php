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
    		left: 450px;
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
		<td width="86" height="54" bgcolor="#757575"><center><FONT Face="Cloud" size="5"><a href="Change_room.php"><FONT Face="Cloud" size="5" color="#000000">เปลี่ยนห้อง</Font></a></center></td>
		<td width="86" height="54" bgcolor="#8C8989"><center><FONT Face="Cloud" size="5"><a href="form_fix.php"><FONT Face="Cloud" size="5" color="#000000">แจ้งซ่อม</Font></a></center></td>
		<td width="86" height="54" bgcolor="#757575"><center><FONT Face="Cloud" size="5"><a href="personal_information.php"><FONT Face="Cloud" size="5" color="#000000">ข้อมูลส่วนตัว</Font></a></center></td>
		</tr>
		</table>
	<center><img src="WebBg.jpg" width="1500" height="1200" alt=""/></center>
	<div class="centered">
		<table width="50%" border="0" align="center" cellpadding="3" cellspacing="0">
			<tr>
				<td height="30" width="90%"align="center">ตึกชวนชม ชั้นที่ : 
				<a href='Change_room.php'>2</a>
				<a href='Change_room2.php'>3</a>
				<a href='Change_room.php'>4</a>
				<a href='Change_room2.php'>5</a>
				<a href='Change_room2.php'>6</a></td>
			</tr>
		</table><br><?php
		echo "<table width=\"97%\" border=\"0\" align=\"center\" cellpadding=\"10\" cellspacing=\"0\" bordercolor=\"#E8E8FF\">";
		$room2='ห้อง';
		$j=201;
for ($k=1; $k <= 10; $k++) { 
echo"<tr>";
	for ($i=1; $i <= 3; $i++){
	$room3=$room2."".$j;
	echo  "<td align=\"center\">";
	echo "<table  width=\"97%\" border=\"1\" align=\"center\" cellpadding=\"3\" cellspacing=\"0\">
									<tr><td colspan=\"2\" align=\"center\"><b>$room3</b></td></tr>";
	$bed1='A';$bed2='B';
	$query ="SELECT * FROM dorm_student WHERE room='$j' and bed='$bed1'";
	$result=mysqli_query($db,$query);
	if($list=mysqli_fetch_array($result)){$bgcolor='#74737a';echo "<tr><td bgcolor='$bgcolor'> A </td>";}
	else {$bgcolor='#00F0F0';echo "	  <tr><td bgcolor='$bgcolor'><A HREF='change.php?room=$j&amp;bed=$bed1'>A</A></td>";}
	$query ="SELECT * FROM dorm_student WHERE room='$j' and bed='$bed2'";
	$result=mysqli_query($db,$query);
	if($list=mysqli_fetch_array($result)){$bgcolor='#74737a';echo "<td bgcolor='$bgcolor'> B </td></tr>";}
	else {$bgcolor='#00F0F0';echo "	  <td bgcolor='$bgcolor'><A HREF='change.php?room=$j&amp;bed=$bed2'>B</A></td></tr>";}
	echo"</table >";
	echo"</td>";
	$j++;}
echo"</tr>";}
echo"</table>";?>

		</div>
</body>
</html>