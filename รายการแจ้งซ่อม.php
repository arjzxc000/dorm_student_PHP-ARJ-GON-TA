<?php session_start();
	require_once("connection.php");
/*if(isset($_SESSION["name"]))
{
	$name=$_SESSION["name"];
}

else
{
		$name="no one ";
}*/?>
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
	    //echo "$id : $name : $email : $bed : $room  : $building <br>";
	}
		
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
</div></div>
<div class="contenttext">
  <table width="90%" border="0" align="center" cellpadding="3" cellspacing="0">
  

  <tr>
    <td align="center" class="b14"><br>
		<u></p><FONT Face="Cloud Light" size="5" color="#DADADA">รายการแจ้งซ่อมของท่าน</font></u></tr></table><br><br>

<table width="1400" border="0" align="center"  cellspacing="0">
	<tr>
		<td width="150" height="54" bgcolor="#f7971e"><center><strong><FONT Face="Cloud" size="4" color="#000000">วันที่แจ้ง</Font></strong></center></td>
		<td width="150" height="54" bgcolor="#f7971e"><center><strong><FONT Face="Cloud" size="4" color="#000000">วันที่รับแจ้ง</Font></strong></center></td>
		<td width="200" height="54" bgcolor="#f7971e"><center><strong><FONT Face="Cloud" size="4" color="#000000">เลขที่ใบแจ้งซ่อม</Font></strong></center></td>
		<td width="300" height="54" bgcolor="#f7971e"><center><strong><FONT Face="Cloud" size="4"><FONT Face="Cloud" size="4" color="#000000">ประเภทงานซ่อม</Font></strong></center></td>
		<td width="200" height="54" bgcolor="#f7971e"><center><strong><FONT Face="Cloud" size="4"><FONT Face="Cloud" size="4" color="#000000">สถานะใบแจ้ง</Font></strong></center></td>
		<td width="250" height="54" bgcolor="#f7971e"><center><strong><FONT Face="Cloud" size="4"><FONT Face="Cloud" size="4" color="#000000">ช่างผู้รับงาน</Font></strong></center></td>
		<td width="150" height="54" bgcolor="#f7971e"><center><strong><FONT Face="Cloud" size="4" color="#000000">วันที่ซ่อมเสร็จ</Font></strong></center></td>
	</tr>
	<?php 
	$idd=$_SESSION["UserID"];
	$sql="SELECT * FROM fix_form WHERE id='$idd'";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result))
	{
		$date_request_fix=$list["date_request_fix"];
		$date_recieve_fix=$list["date_recieve_fix"];
		$fix_form_num=$list["fix_form_num"];
		$fix_type=$list["fix_type"];
		$fix_status=$list["fix_status"];
		$technician_fix=$list["technician_fix"];
		$date_finish_fix=$list["date_finish_fix"];
		$sql2="SELECT * FROM fix_status WHERE status_id='$fix_status'";
		$result2=mysqli_query($db,$sql2);
		$list2=mysqli_fetch_array($result2);
		$fix_status2=$list2["status"];
		
		$fix_type1=$fix_type;
	$sql_3="SELECT * FROM fix_type where fix_type_id='$fix_type1'";
	$result_3=mysqli_query($db,$sql_3);
	$list3=mysqli_fetch_array($result_3);
	$fix_type_name=$list3["fix_type"];
	

	echo "	  
	  <tr height=\"60\" bgcolor=#525252>
      <td align=\"center\"> $date_request_fix </td>
      <td align=\"center\"> $date_recieve_fix </td>
      <td align=\"center\"><a href='แสดงรายการแจ้งซ่อม.php?fix_form_num=$fix_form_num'> $fix_form_num</a></td>
	  <td align=\"center\"> $fix_type_name </td>
	  <td align=\"center\"> $fix_status2 </td>
	  <td align=\"center\"> $technician_fix </td>
	  <td align=\"center\"> $date_finish_fix </td>
      </tr>
	  ";}
?>
</table>
</div></div>
</body>
</html>