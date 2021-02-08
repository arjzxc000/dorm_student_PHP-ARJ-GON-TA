<?php session_start();?>
<?php 
 
if (!$_SESSION["UserID"]){  //check session
 
	  Header("Location: form_login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
 
}else{?>
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
<title>Admin page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="topnav">
	<a class="active" href="admin.php"><strong><FONT Face="Cloud">Home</font></strong></a>
	<a class="active" href="admin_student.php"><strong><FONT Face="Cloud">Student</font></strong></a>
	<a class="active" href="Change_roomad.php"><strong><FONT Face="Cloud">Room Status</font></strong></a>
	<a class="active" href="admin_fix.php"><strong><FONT Face="Cloud">Fix Status</font></strong></a>
	<a class="active" href="history_roomad.php"><strong><FONT Face="Cloud">Room History</font></strong></a>
<center><img src="กูทำ/slate-texture-background.jpg" width="1500" height="450" alt=""/></center>
<div class="bannertext">
	<center><h1><FONT Face="Cloud" size="8" color="white">Welcome</font></h1></center>
</div>
<div class="bannertext2">
	<center><h1><FONT Face="Cloud Light" size="3" color="white">You are Administration</font></h1></center>
</div>
<div class="buttoncontainer"><br>
	<center><a href="logout.php" class="button"><b><FONT Face="Cloud" size="3">Logout</font></a></b></center></div>
<div class="middlenav">
	<br>
</div>
<div class="content">
	<br>
</div></div>
	<div class="contenttext">
<form action = "admin_fix.php" method = "get">
		<input type = "radio" name = "choose" value = "0"> งานที่อยู่ระหว่างดำเนินการ <input type = "radio" name = "choose" value = "1" > แสดงทั้งหมด
		<input type = "submit" value = "เลือก" class="buttonn">
</form><br>
	<TABLE width="95%"  align="center" border="1" cellpadding="1" cellspacing="0">
<TR>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">เลขที่ใบแจ้งซ่อม</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">วันที่แจ้งซ่อม</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">วันที่รับแจ้ง</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">รหัสนิสิต</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">ชื่อ-นามสกุล</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">ตึก</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">ชั้น</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">ห้อง</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">เตียง</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">เบอร์ติดต่อ</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">ประเภทงานที่ซ่อม</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">รายละเอียดงาน</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">สถานะงาน</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">การนัดหมาย</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">ช่างผู้รับงาน</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">วันที่ซ่อม</font></strong></TD>
</TR>
		<?php 
require("connection.php");

if(isset($_GET["choose"])){
$choose=$_GET["choose"];
if($choose=="0")
{
	$sql = "SELECT * FROM fix_form WHERE fix_status='$choose'";
	$result = mysqli_query($db,$sql);
	 while($list = mysqli_fetch_array($result))
	 {
	 	$fix_form_num=$list['fix_form_num'];
		$date_request_fix=$list["date_request_fix"];
		$date_recieve_fix=$list["date_recieve_fix"];
		$id=$list["id"];
		$fix_type=$list["fix_type"];
		$fix_detail=$list["fix_detail"];
		$fix_status=$list["fix_status"];
		$time_interval=$list["time_interval"];
		$tel_fix=$list["tel_fix"];
		$date_finish_fix=$list["date_finish_fix"];
		$technician_fix=$list["technician_fix"];
		
	$id1=$id;
	$sql_4="SELECT * FROM dorm_student where id='$id1'";
	$result_4=mysqli_query($db,$sql_4);
	$list4=mysqli_fetch_array($result_4);
	$name1=$list4["name"];
	$building1=$list4["building"];
	$floor1=$list4["floor"];
	$room1=$list4["room"];
	$bed1=$list4["bed"];
	
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
	//if($fix_status==0){ $bgcolor="#fc7ee1";}
	//else{ $bgcolor="#f7971e";}
	
echo"
<TR>
	<TD>$fix_form_num</TD>
	<TD>$date_request_fix</TD>
	<TD>$date_recieve_fix</TD>
	<TD>$id</TD>
	<TD>$name1</TD>
	<TD>$building1</TD>
	<TD>$floor1</TD>
	<TD>$room1</TD>
	<TD>$bed1</TD>
	<TD>$tel_fix</TD>
	<TD>$fix_type_name</TD>
	<TD>$fix_detail</TD>
	<TD>$fix_status2</TD>
	<TD>$time</TD>
	<TD>$technician_fix</TD>
	<TD>$date_finish_fix</TD>
	<TD><A class=\"active2\" HREF='submit_admin_fix.php?fix_form_num=$fix_form_num&amp;id=$id'>edit</A></TD>
</TR>";
	}
}
elseif($choose=="1")
{


/////////////// show

	$sql_1="SELECT * FROM fix_form";
	$result_1=mysqli_query($db,$sql_1);
	while ($list=mysqli_fetch_array($result_1))
	{
		
		$fix_form_num=$list['fix_form_num'];
		$date_request_fix=$list["date_request_fix"];
		$date_recieve_fix=$list["date_recieve_fix"];
		$id=$list["id"];
		$fix_type=$list["fix_type"];
		$fix_detail=$list["fix_detail"];
		$fix_status=$list["fix_status"];
		$time_interval=$list["time_interval"];
		$tel_fix=$list["tel_fix"];
		$date_finish_fix=$list["date_finish_fix"];
		$technician_fix=$list["technician_fix"];
		
	$id1=$id;
	$sql_4="SELECT * FROM dorm_student where id='$id1'";
	$result_4=mysqli_query($db,$sql_4);
	$list4=mysqli_fetch_array($result_4);
	$name1=$list4["name"];
	$building1=$list4["building"];
	$floor1=$list4["floor"];
	$room1=$list4["room"];
	$bed1=$list4["bed"];
	
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
	if($fix_status==0){ $bgcolor="#fc7ee1";}
	else{ $bgcolor="#f7971e";}
echo"
<TR>
	<TD>$fix_form_num</TD>
	<TD>$date_request_fix</TD>
	<TD>$date_recieve_fix</TD>
	<TD>$id</TD>
	<TD>$name1</TD>
	<TD>$building1</TD>
	<TD>$floor1</TD>
	<TD>$room1</TD>
	<TD>$bed1</TD>
	<TD>$tel_fix</TD>
	<TD>$fix_type_name</TD>
	<TD>$fix_detail</TD>
	<TD>$fix_status2</TD>
	<TD>$time</TD>
	<TD>$technician_fix</TD>
	<TD>$date_finish_fix</TD>
	<TD><A class=\"active2\" HREF='submit_admin_fix.php?fix_form_num=$fix_form_num&amp;id=$id'>edit</A></TD>
</TR>";
	}
}}
else/////////////// show
{

	$sql_1="SELECT * FROM fix_form";
	$result_1=mysqli_query($db,$sql_1);
	while ($list=mysqli_fetch_array($result_1))
	{
		
		$fix_form_num=$list['fix_form_num'];
		$date_request_fix=$list["date_request_fix"];
		$date_recieve_fix=$list["date_recieve_fix"];
		$id=$list["id"];
		$fix_type=$list["fix_type"];
		$fix_detail=$list["fix_detail"];
		$fix_status=$list["fix_status"];
		$time_interval=$list["time_interval"];
		$tel_fix=$list["tel_fix"];
		$date_finish_fix=$list["date_finish_fix"];
		$technician_fix=$list["technician_fix"];
		
	$id1=$id;
	$sql_4="SELECT * FROM dorm_student where id='$id1'";
	$result_4=mysqli_query($db,$sql_4);
	$list4=mysqli_fetch_array($result_4);
	$name1=$list4["name"];
	$building1=$list4["building"];
	$floor1=$list4["floor"];
	$room1=$list4["room"];
	$bed1=$list4["bed"];
	
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
	if($fix_status==0){ $bgcolor="#fc7ee1";}
	else{ $bgcolor="#f7971e";}
echo"
<TR>
	<TD>$fix_form_num</TD>
	<TD>$date_request_fix</TD>
	<TD>$date_recieve_fix</TD>
	<TD>$id</TD>
	<TD>$name1</TD>
	<TD>$building1</TD>
	<TD>$floor1</TD>
	<TD>$room1</TD>
	<TD>$bed1</TD>
	<TD>$tel_fix</TD>
	<TD>$fix_type_name</TD>
	<TD>$fix_detail</TD>
	<TD>$fix_status2</TD>
	<TD>$time</TD>
	<TD>$technician_fix</TD>
	<TD>$date_finish_fix</TD>
	<TD><A class=\"active2\" HREF='submit_admin_fix.php?fix_form_num=$fix_form_num&amp;id=$id'>edit</A></TD>
</TR>";
	}
}
}

?>

</TABLE>







		</div>

</body>
</html>