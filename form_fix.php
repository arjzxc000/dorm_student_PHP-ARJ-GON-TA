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
<title>Form Fix</title>
<link rel="stylesheet" href="กูทำ/style2.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script language="JavaScript">
function openpopup()
{
window.open('popup2.html','popup-name','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
}
</script>
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
</div></div>
<div class="contenttext">
	<FORM METHOD=POST ACTION="add_form_fix" enctype="multipart/form-data">
	<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0">
</tr>
<tr><td><br><br></td></tr>
<tr>
	  <td align="center">
	  <a class="button2" href="รายการแจ้งซ่อม.php"><strong><FONT Face="Cloud" color="#000000">ตรวจสอบสถานะแจ้งซ่อมออนไลน์</font></strong></a></td>
</tr>
<tr><td><br><br><br><br></td></tr>
  <tr>
	<td align="center"><br>
		<b><font Face="Cloud" size="7" color="#DADADA">ประเภทงานซ่อม</font></b><br></tr>
<tr>
<td align="center"><br>
	<select class="select" name="fix_type" id="fix_type">
      <?php
	$sql="SELECT * FROM fix_type";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result))
	{
		$fix_type_id=$list["fix_type_id"];
		$fix_type=$list["fix_type"];
		echo"<option value='$fix_type_id'> $fix_type</option>";	
	}
		
	?>
	</select></td>
</tr>
<tr>
	<td align="center"><br>
		<b><font Face="Cloud" size="7"> </font></b><br>
	</td>
</tr>
<tr>
	<td align="center"><br>
		<b><font Face="Cloud" size="7" color="#DADADA">การนัดหมาย</font></b><br></tr>
<tr>
	<td align="center"><br>
	<select class="select" name="time">
    <?php
	$sql="SELECT * FROM time_table";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result)) 
	{
		$time_id=$list["time_id"];
		$time=$list["time"];
		echo"<option value='$time_id'> $time</option>";
	}
		
	?>
	</select></td>
</tr>
<tr>
	<td align="center"><br>
		<b><font Face="Cloud" size="7"> </font></b><br>
	</td>
</tr>
<tr>
	<td align="center"><br>
		<b><font Face="Cloud" size="7" color="#DADADA">หมายเลขโทรศัพท์</font></b>
</tr>
<tr>
	<td align="center"><br>
		<input class="select2" required name="tel_fix" type = "text"></input><br>
</tr>
<tr>
	<td align="center"><br>
		<b><font Face="Cloud" size="7"> </font></b><br>
	</td>
</tr>
<tr>
	<td align="center"><br>
		<b><font Face="Cloud" size="7" color="#DADADA">รายละเอียด</font></b></tr>
<tr>
	<td align="center"><br>
		<input class="select2" name="fix_detail" type = "text" size="50"></input>	
</tr>
<tr>
	<td align="center"><br>
		<b><font Face="Cloud" size="7"> </font></b><br>
	</td>
</tr>
<tr>
	<td align="center"><br>
		<b><font Face="Cloud" size="7" color="#DADADA">แนบภาพถ่าย</font></b><br></tr>
<tr>
	<td align="center"><br>
	<center><input  type="file" name="file"></center>
</tr>
<tr>
	<td align="center"><br>
		<b><font Face="Cloud" size="7"> </font></b><br>
	</td>
</tr>
<tr>
	<td align="center"><br>
	<input class="buttonn" type="submit" name="btnSubmit" style="width:100px; height:50px;"/></tr></table></FORM></div>

</body>
</html>