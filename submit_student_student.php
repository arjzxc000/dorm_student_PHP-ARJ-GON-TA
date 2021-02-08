<?php session_start();
	require_once("connection.php");
?>
<!doctype html>
<html>
<head>
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
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result))
	{
		$building=$list["building"];
		$room=$list["room"];
		$id=$list["id"];
		$password=$list["password"];
		$name=$list["name"];
		$email=$list["email"];
		$tel=$list["tel"];
		$address=$list["address"];
		$bed=$list["bed"];
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
<FORM METHOD=POST ACTION="student_update_student.php">
<TABLE align="center" width="70%">
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">name</font></strong></TD>
	<TD><INPUT TYPE="text" NAME="name" value="<?php echo $name;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
	<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">password</font></strong></TD>
	<TD><INPUT TYPE="text" NAME="password" value="<?php echo $password;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">email</font></strong></TD>
	<TD><INPUT TYPE="text" NAME="email" value="<?php echo $email;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">address</font></strong></TD>
	<TD><INPUT TYPE="text" NAME="address" value="<?php echo $address;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">tel</font></strong></TD>
	<TD><INPUT TYPE="text" NAME="tel" value="<?php echo $tel;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<tr>
	<td><br></td>
</tr>
<TR>
</TR>
<tr>
	<td><br></td>
</tr>

<tr>
	<td><br></td>
</tr>
<tr>
	<td><input class="buttonn" type="submit"  style="width:100px; height:50px;" value="Edit"/></td>
</tr>


</TABLE>






</FORM>
		</div>
	</div>
    
	
</body>
</html>