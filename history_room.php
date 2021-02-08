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
<meta charset="UTF-8">
<title>Form Login</title>
<link rel="stylesheet" href="กูทำ/style2.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	    $status=$list["status"];
	}
		
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
</div></div>
<div class="contenttext">
	<center>
		<b><u><FONT Face="Cloud" size="5" color="#DADADA"><?php
	echo "ประวัติย้ายเตียง";?></font></u></b><br>
	</center>
	<br>
	<TABLE width="90%"  align="center" border="1" cellpadding="1" cellspacing="0">
<TR height="50">
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">change_form_id</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">id</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">วันที่ย้ายเข้า</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">วันที่ย้ายออก</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">room_old</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">bed_old</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">room_new</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">bed_new</font></strong></TD>
</TR>
	<?php
	$sql = "SELECT * FROM change_room WHERE id='$idd'";
	$result = mysqli_query($db,$sql);
	 while($list = mysqli_fetch_array($result))
	 {
$change_form_id=$list['change_form_id'];
$id=$list['id'];
$date_change_room=$list['date_change_room'];
$date_out=$list['date_out'];
$room_old=$list['room_old'];
$bed_old=$list['bed_old'];
$room_new=$list['room_new'];
$bed_new=$list['bed_new'];

echo"
<TR height=\"50\">
	<TD>$change_form_id</TD>
	<TD>$id</TD>
	<TD>$date_change_room</TD>
	<TD>$date_out</TD>
	<TD>$room_old</TD>
	<TD>$bed_old</TD>
	<TD>$room_new</TD>
	<TD>$bed_new</TD>
</TR>";

}?>
</TABLE>
		
</div>
</body>
</html>