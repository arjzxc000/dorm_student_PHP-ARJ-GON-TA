<!doctype html>
<?php session_start();
	require_once("connection.php");
?>
<html>
<head>
	<style>
	  	.centered {
  			position: absolute;
    		top: 400px;
    		left: 650px;
    		width: 1000px;
    		height: 2000px;
			background-color: none;
	  	}
		
	  </style>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="Change Room/Change_room.php.css" rel="stylesheet" type="text/css">
</head>
<style>
.table_result {
  margin-top: 10%;
  width: 100%
}
</style>
<body>
	<center><img src="Banner.jpg" width="1500" height="350" alt=""/></center>
	<table width="1500" border="0" align="center"  cellspacing="0">
	  	<tr>
		<td width="86" height="54" bgcolor="#8C8989"><center><a href="หน้าแรก.php"><FONT Face="Cloud" size="5" color="#000000">หน้าแรก</Font></a></center></td>
		<td width="86" height="54" bgcolor="#757575"><center><FONT Face="Cloud" size="5"><a href="Change_room.php"><FONT Face="Cloud" size="5" color="#000000">เปลี่ยนห้อง</Font></a></center></td>
		<td width="86" height="54" bgcolor="#8C8989"><center><FONT Face="Cloud" size="5"><a href="form_fix.php"><FONT Face="Cloud" size="5" color="#000000">แจ้งซ่อม</Font></a></center></td>
		<td width="86" height="54" bgcolor="#757575"><center><FONT Face="Cloud" size="5"><a href="personal_information.php"><FONT Face="Cloud" size="5" color="#000000">ข้อมูลส่วนตัว</Font></a></center></td>
		</tr>
		</table>
	<center><img src="WebBg.jpg" width="1500" height="1400" alt=""/></center>
	<br><br><br>
	<?php
	$fix_form_num2=$_GET['fix_form_num'];
	$idd=$_SESSION["UserID"];	
	$sql="SELECT * FROM dorm_student where id='$idd'";
	//echo $sql;
	$result=mysqli_query($db,$sql);
	$list=mysqli_fetch_array($result);

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
	  
	$sql_1="SELECT * FROM fix_form where fix_form_num='$fix_form_num2'";
	$result_1=mysqli_query($db,$sql_1);
	while ($list=mysqli_fetch_array($result_1))
	{
		$fix_form_num=$list['fix_form_num'];
		$date_request_fix=$list["date_request_fix"];
		$date_recieve_fix=$list["date_recieve_fix"];
		$fix_type=$list["fix_type"];
		$fix_detail=$list["fix_detail"];
		$fix_status=$list["fix_status"];
		$time_interval=$list["time_interval"];
		$tel_fix=$list["tel_fix"];
		$date_finish_fix=$list["date_finish_fix"];
		$technician_fix=$list["technician_fix"];
	}
	$fix_type1=$fix_type;
	$sql_2="SELECT * FROM fix_type where fix_type_id='$fix_type1'";
	$result_2=mysqli_query($db,$sql_2);
	$list2=mysqli_fetch_array($result_2);
	$fix_type_name=$list2["fix_type"];
	
	$time_interval1=$time_interval;
	$sql_3="SELECT * FROM time_table where time_id='$time_interval1'";
	$result_3=mysqli_query($db,$sql_3);
	$list3=mysqli_fetch_array($result_3);
	$time=$list3["time"];
	
	$fix_status1=$fix_status;
	$sql_5="SELECT * FROM fix_status where status_id='$fix_status1'";
	$result_5=mysqli_query($db,$sql_5);
	$list5=mysqli_fetch_array($result_5);
	$fix_status2=$list5["status"];
	?>
	<div class="centered">
	<table width="100%" class="table_result">
		<tr>
		<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">เลขที่ใบแจ้งซ่อม</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $fix_form_num?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">วันที่แจ้งซ่อม</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $date_request_fix?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">วันที่รับแจ้ง</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $date_recieve_fix?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">รหัสนิสิต</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $id?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">ชื่อ-นามสกุล</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $name?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">ตึก</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $building?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">ชั้น</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $floor?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">ห้อง</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $room?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">เตียง</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $bed?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">เบอร์ติดต่อ</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $tel_fix?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
		<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">ประเภทงานที่ซ่อม</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $fix_type_name?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">รายละเอียดงาน</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $fix_detail?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">การนัดหมาย</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $time?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">สถานะงาน</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $fix_status2?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">ช่างผู้รับงาน</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $technician_fix?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5">วันที่ซ่อม</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5">:<?php echo $date_finish_fix?></font></td>
		</tr>
		<br>
		
		
</table>
</body>
</html>