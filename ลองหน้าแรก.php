<?php session_start();
	require_once("connection.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="กูทำ/style2.css">
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
	.centered {
  			position: absolute;
    		top: 500px;
    		left: 500px;
    		width: 1000px;
    		height: 2000px;
			background-color: none;
	  	}
</style>

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
		$email=$list["email"];
	}
		if($bed==""){  
		echo "<script>";
		echo "alert(\" กรุณาเลือกเตียงให้เสร็จสมบูรณ์ก่อนทำรายการ \");";
		echo "window.location.href='Change_room.php';";
  		echo "</script>";}
        
?>
<div class="topnav">
	<a class="active" href="ลองหน้าแรก.php"><strong><FONT Face="Cloud">Home</font></strong></a>
	<a class="active" href="Change_room.php"><strong><FONT Face="Cloud">Change Room</font></strong></a>
	<a class="active" href="form_fix.php"><strong><FONT Face="Cloud">Fix</font></strong></a>
	<a class="active" href="personal_information.php"><strong><FONT Face="Cloud">Personal Information</font></strong></a>
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
	

</body>
</html>