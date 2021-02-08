<?php session_start();?>
<?php 
 
if (!$_SESSION["UserID"]){  //check session
 
	  Header("Location: admin_fix.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
 
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
  <link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.theme.css">
  <link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.structure.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
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
		<?php 
require("connection.php");
$id=$_GET['id'];
$query ="SELECT * FROM dorm_student WHERE id='$id'";
//echo $query;
$result=mysqli_query($db,$query);

$list=mysqli_fetch_array($result);

$id=$list['id'];
$password=$list['password'];
$name=$list['name'];
$email=$list['email'];
$tel=$list['tel'];
$address=$list['address'];
$building=$list['building'];
$room=$list['room'];
$floor=$list['floor'];
$bed=$list['bed'];
$interviewee=$list['interviewee'];
$approve=$list['approve'];
$status=$list['status'];

}
$fix_form_num2=$_GET['fix_form_num'];  
	$sql_1="SELECT * FROM fix_form where fix_form_num='$fix_form_num2'";
	$result_1=mysqli_query($db,$sql_1);
$list=mysqli_fetch_array($result_1);
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
	if($image!=""){$image="<img src='upload/$image' height='200' >";}
	else{$image="<img src='upload/fix' height='200' >";}
    $image2=$list['fix_image2'];
	if($image2!=""){$image2="<img src='upload/$image2' height='200' >";}
	else{$image2="<img src='upload/fix' height='200' >";}
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





?>


<FORM METHOD=POST ACTION="admin_update_fix.php" enctype="multipart/form-data">
<TABLE align="center" width="70%" >
<tr>
	<td><br></td>
</tr>
<TR>
	<TD width="250"><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">เลขที่ใบแจ้งซ่อม</font></strong></TD>
	<TD width="400"><FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $fix_form_num;?></font></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">วันที่แจ้งซ่อม</font></strong></TD>
	<TD><FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $date_request_fix ?></font>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">วันที่รับแจ้ง</font></strong></TD>
	<TD>
		<FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $date_recieve_fix?> </font></TD>
	<?php echo "<TD><A class=\"active\" HREF='update_date_fix.php?fix_form_num=$fix_form_num&amp;id=$id'>รับแจ้ง</A>
</TD> "?>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">รหัสนิสิต</font></strong></TD>
	<TD><FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $id;?></font></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">ชื่อ-นามสกุล</font></strong></TD>
	<TD><FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $name;?></font></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">ตึก</font></strong></TD>
	<TD><FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $building;?></font></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">ชั้น</font></strong></TD>
	<TD><FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $floor;?></font></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">ห้อง</font></strong></TD>
	<TD><FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $room;?></font></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">เตียง</font></strong></TD>
	<TD><FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $bed;?></font></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">เบอร์ติดต่อ</font></strong></TD>
	<TD><FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $tel_fix;?></font></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">ประเภทงานที่ซ่อม</font></strong></TD>
	<TD><FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $fix_type_name;?></font></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">รายละเอียดงาน</font></strong></TD>
	<TD><FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $fix_detail;?></font></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">การนัดหมาย</font></strong></TD>
	<TD><FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $time;?></font></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">สถานะงาน</font></strong></TD>
	<TD>
		<select name="status" class="select3">
    <?php
	$sql="SELECT * FROM fix_status";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result)) /*ดึงข้อมูลมาทีละ row จนหมด ถึงจะจบลูปwhile*/
	{
		$status_id=$list["status_id"];
		$status=$list["status"];
		if($fix_status==$status_id) $selected="selected";
		else $selected="";
		echo"<option value='$status_id' $selected> $status</option>";
	}
		
	?>
    </select>
	</TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">ช่างผู้รับงาน</font></strong></TD>
	<TD><select name="status2" class="select3">
	  <?php
	$sql="SELECT * FROM technician_team where technician_type='$fix_type1'";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result)) /*ดึงข้อมูลมาทีละ row จนหมด ถึงจะจบลูปwhile*/
	{
		$status2_id=$list["technician_type"];
		$status2=$list["technician_name"];
		if($technician_type==$status2_id) $selected="selected";
		else $selected="";
		echo"<option value='$status2' $selected> $status2</option>";
	}
	?>
	  </select></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">วันที่ซ่อม</font></strong></TD>
	<TD>
		<FONT Face="Cloud Light" size="5" color="#FFFFFF"><?php echo $date_finish_fix?> </font></TD>
	<?php echo "<TD><A class=\"active\" HREF='update_date_fix2.php?fix_form_num=$fix_form_num&amp;id=$id'>รับแจ้ง</A>
</TD> "?></TR>
<tr>
	<td><br></td>
</tr>
<tr>
			<td ><div align="left"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">ภาพถ่ายงานแจ้งซ่อม :</font></strong></div></td>
			<td colspan="2"><FONT Face="Cloud Light" size="5" color="#FFF8F8"><?php echo $image?></font></td>
</tr>
<tr>
	<td><br></td>
</tr>
	<tr>
			<td ><div align="left"><strong><FONT Face="Cloud Light" size="5" color="#FFF8F8">ภาพถ่ายงานที่ช่างซ่อม</font></strong></div></td>
			<td colspan="2"><FONT Face="Cloud Light" size="5" color="#FFF8F8"><?php echo $image2?></font></td>
			<td><center><input  type="file" name="file" class="select3"></center><td>
</tr>
<tr>
	<td><br></td>
</tr>
<tr><td>
<INPUT TYPE='hidden' name='fix_form_num' value="<?php echo $fix_form_num;?>">
<input type="submit" class="buttonn" name="btnSubmit" style="width:100px; height:50px;" value="Edit"/>
</FORM></td></tr></TABLE>
		</div>

</body>
</html>
<?php ?>