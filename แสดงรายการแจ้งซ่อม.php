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
		$image=$list['fix_image'];
		$image2=$list['fix_image2'];
	if($image2!=""){$image2="<img src='upload/$image2' height='400' >";}
	else{$image2="<img src='upload/fix' height='400' >";}
	if($image!=""){$image="<img src='upload/$image' height='400' >";}
	else{$image="<img src='upload/fix' height='400' >";}
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
<div class="contenttext2">
  <table width="100%" class="table_result">
		<tr>
		<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">เลขที่ใบแจ้งซ่อม</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $fix_form_num?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">วันที่แจ้งซ่อม</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $date_request_fix?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">วันที่รับแจ้ง</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $date_recieve_fix?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">รหัสนิสิต</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $id?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8" color="#FFF8F8">ชื่อ-นามสกุล</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8" color="#FFF8F8">:<?php echo $name?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">ตึก</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $building?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">ชั้น</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $floor?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">ห้อง</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $room?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">เตียง</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $bed?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">เบอร์ติดต่อ</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $tel_fix?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
		<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">ประเภทงานที่ซ่อม</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $fix_type_name?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">รายละเอียดงาน</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $fix_detail?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">การนัดหมาย</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $time?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">สถานะงาน</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $fix_status2?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">ช่างผู้รับงาน</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $technician_fix?></font></td>
		</tr>
		<tr>
		<td width="30%" height="30"> 
		</td>
		</tr>
		<tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">วันที่ซ่อม</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8">:<?php echo $date_finish_fix?></font></td>
		</tr>
	  <tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">ภาพถ่ายงานแจ้งซ่อม :</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8"><?php echo $image?></font></td>
		</tr>
	  <tr>
			<td width="30%"><div align="right"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">ภาพถ่ายงานที่ช่างซ่อม :</font></strong></div></td>
			<td width="70%"><FONT Face="Cloud Light" size="5" color="#FFF8F8"><?php echo $image2?></font></td>
		</tr>
		<br>
		
		
</table>
</div>
</body>
</html>