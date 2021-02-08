<?php session_start();
	require_once("connection.php");
?>
<!doctype html>
<html>
<head>
	<style>
	  	body {
		background-color: #000000;
		}
		.bannertext{
		position: absolute;
    	top: 200px;
    	left: 254px;
    	width: 1000px;
    	height: 800px;
		background-color: none;
		}
		.bannertext2{
		position: absolute;
    	top: 256px;
    	left: 254px;
    	width: 1000px;
    	height: 800px;
		background-color: none;	
		}
	  </style>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="กูทำ/style2.css">
</head>
<body>
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
		$address=$list["address"];
		$email=$list["email"];
		$approve=$list["approve"];
		$tel=$list["tel"];
	    //echo "$id : $name : $email : $bed : $room  : $building <br>";
	}
	if($bed==""){  
		echo "<script>";
		echo "alert(\" กรุณาเลือกเตียงให้เสร็จสมบูรณ์ก่อนทำรายการ \");";
		echo "window.location.href='Change_room.php';";
  		echo "</script>";}
?>
	<div class="topnav">
	<div class="topnav-right">
	<a class="active" href="ลองหน้าแรก.php"><strong><FONT Face="Cloud">Home</font></strong></a>
	<a class="active" href="Change_room.php"><strong><FONT Face="Cloud">Change Room</font></strong></a>
	<a class="active" href="form_fix.php"><strong><FONT Face="Cloud">Fix</font></strong></a>
	<a class="active" href="personal_information.php"><strong><FONT Face="Cloud">Personal Information</font></strong></a></div>
<center><img src="กูทำ/slate-texture-background.jpg" width="1500" height="450" alt=""/></center>
<div class="bannertext">
	<center><h1><FONT Face="Cloud" size="8" color="white">Welcome</font></h1></center>
</div>
<div class="bannertext2">
	<center><h1><FONT Face="Cloud Light" size="3" color="white">You are Student</font></h1></center>
</div>
<div class="buttoncontainer"><br>
	<center><a href="logout.php" class="button"><b><FONT Face="Cloud" size="3">Logout</font></a></b></center></div>
<div class="middlenav">
	<br>
</div>
<div class="IDicon">
	<img src="Icon ID.png" height="60" width="60">
</div>
<div class="nameicon">
	<img src="Icon person.png" height="60" width="60">
</div>
<div class="bedicon">
	<img src="Icon bed.png" height="60" width="60">
</div>
<div class="roomicon">
	<img src="Icon door.png" height="60" width="60">
</div>
<div class="buildingicon">
	<img src="Icon building.png" height="60" width="60">
</div>
<div class="ID">
	<b><FONT Face="Cloud" size="5"><?php echo "$id"?></font></b>
</div>
<div class="name">
	<b><FONT Face="Cloud" size="5"><?php echo "$name"?></font></b>
</div>
<div class="bed">
	<b><FONT Face="Cloud" size="5"><?php echo "$bed"?></font></b>
</div>
<div class="room">
	<b><FONT Face="Cloud" size="5"><?php echo "$room"?></font></b>
</div>
<div class="building">
	<b><FONT Face="Cloud" size="5"><?php echo "$building"?></font></b>
</div>
<div class="content">
	<br>
</div>
</div>
<div class="contenttext">
    <center><h1><FONT Face="Cloud" size="12" color="#DADADA">Personal Information</FONT><br><br><table width="90%" border="0" align="center" cellpadding="3" cellspacing="0"></h1></center>
  <tr>
    <td align="center"><tr>
      <td align="center" class="b14"><div class='blue' align='center'><br>
		<font Face="Cloud Light" size="5" color="#DADADA">รหัสนิสิต : </font><b><FONT Face="Cloud Light" size="5" color="#DADADA"><?php echo "$id"?></font></b> <br><br><br>
        <font Face="Cloud Light" size="5" color="#DADADA">นิสิตชื่อ : </font><b><FONT Face="Cloud Light" size="5" color="#DADADA"><?php echo "$name"?></font></b> <br><br><br>
        <FONT Face="Cloud Light" size="5" color="#DADADA">ปัจจุบันพักอยู่ที่ : เตียง </font><b><FONT Face="Cloud Light" size="5" color="#DADADA"><?php echo "$bed"?></font></b> 
        <FONT Face="Cloud Light" size="5" color="#DADADA">ห้อง </font><b><FONT Face="Cloud Light" size="5" color="#DADADA"><?php echo "$room"?></font></b><FONT Face="Cloud Light" size="5" color="#DADADA"> ชั้น </font><b><FONT Face="Cloud Light" size="5" color="#DADADA"><?php echo "$floor"?></font></b><FONT Face="Cloud Light" size="5" color="#DADADA"> ตึก </font><b><FONT Face="Cloud Light" size="5" color="#DADADA"><?php echo "$building"?></font></b><br><br><br>
        <p><FONT Face="Cloud Light" size="5" color="#DADADA">e-mail</font><FONT Face="Cloud Light" size="5" color="#DADADA"> :</font>&nbsp;<FONT Face="Cloud Light" size="5" color="#DADADA"><?php echo "$email"?></font></p>
        <br>
        <FONT Face="Cloud Light" size="5" color="#DADADA">ที่อยู่ปัจจุบัน : </font><b><FONT Face="Cloud Light" size="5" color="#DADADA"><?php echo "$address"?></font></b><br><br>
		<FONT Face="Cloud Light" size="5" color="#DADADA">เบอร์โทร : </font><b><FONT Face="Cloud Light" size="5" color="#DADADA"><?php echo "$tel"?></font></b><br>  
		  <br>
		  <br>
		</div>
	<center><a href="submit_student_student.php" class="button5"><strong><FONT Face="Cloud" size="3">Edit</font></strong></a></center></div>
</body>
</html>