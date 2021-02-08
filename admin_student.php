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
<form action = "admin_student.php" method = "get">
	<input type = "radio" name = "choose" value = "0"> เฉพาะผู้ที่รอการอนุมัติ <input type = "radio" name = "choose" value = "1" > แสดงทั้งหมด
		<input type = "submit" value = "เลือก" class="buttonn">
<br>
	<TABLE width="90%"  align="center" border="1" cellpadding="1" cellspacing="0">
<TR height="50">
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">id</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">password</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">name</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">email</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">tel</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">address</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">building</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">room</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">bed</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">interviewee</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">approve</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">status</font></strong></TD>
	<TD bgcolor="#f7971e"><strong><FONT Face="Cloud" size="4" color="000000">edit</font></strong></TD>
</TR>
		<?php 
require("connection.php");
if(isset($_GET["choose"])){
$choose=$_GET["choose"];
if($choose=="0")
{
	$sql = "SELECT * FROM dorm_student WHERE approve=''";
	$result = mysqli_query($db,$sql);
	 while($list = mysqli_fetch_array($result))
	 {
$id=$list['id'];
$password=$list['password'];
$name=$list['name'];
$email=$list['email'];
$tel=$list['tel'];
$address=$list['address'];
$building=$list['building'];
$room=$list['room'];
$bed=$list['bed'];
$interviewee=$list['interviewee'];
$approve=$list['approve'];
$status=$list['status'];
		 
echo"
<TR height=\"50\">
	<TD>$id</TD>
	<TD>$password</TD>
	<TD>$name</TD>
	<TD>$email</TD>
	<TD>$tel</TD>
	<TD>$address</TD>
	<TD>$building</TD>
	<TD>$room</TD>
	<TD>$bed</TD>
	<TD>$interviewee</TD>
	<TD>$approve</TD>
	<TD>$status</TD>
	<TD><A class=\"active2\" HREF='submit_admin_student.php?id=$id'>edit</A></TD>
</TR>";

}}
elseif($choose=="1")
{
	$sql_1="SELECT * FROM dorm_student";
	$result_1=mysqli_query($db,$sql_1);
	while ($list=mysqli_fetch_array($result_1))
	{
$id=$list['id'];
$password=$list['password'];
$name=$list['name'];
$email=$list['email'];
$tel=$list['tel'];
$address=$list['address'];
$building=$list['building'];
$room=$list['room'];
$bed=$list['bed'];
$interviewee=$list['interviewee'];
$approve=$list['approve'];
$status=$list['status'];
		 
echo"
<TR height=\"50\">
	<TD>$id</TD>
	<TD>$password</TD>
	<TD>$name</TD>
	<TD>$email</TD>
	<TD>$tel</TD>
	<TD>$address</TD>
	<TD>$building</TD>
	<TD>$room</TD>
	<TD>$bed</TD>
	<TD>$interviewee</TD>
	<TD>$approve</TD>
	<TD>$status</TD>
	<TD><A class=\"active2\" HREF='submit_admin_student.php?id=$id'>edit</A></TD>
</TR>";

}}}

else
{
	$sql_1="SELECT * FROM dorm_student";
	$result_1=mysqli_query($db,$sql_1);
	while ($list=mysqli_fetch_array($result_1))
	{
$id=$list['id'];
$password=$list['password'];
$name=$list['name'];
$email=$list['email'];
$tel=$list['tel'];
$address=$list['address'];
$building=$list['building'];
$room=$list['room'];
$bed=$list['bed'];
$interviewee=$list['interviewee'];
$approve=$list['approve'];
$status=$list['status'];
		 
echo"
<TR height=\"50\">
	<TD>$id</TD>
	<TD>$password</TD>
	<TD>$name</TD>
	<TD>$email</TD>
	<TD>$tel</TD>
	<TD>$address</TD>
	<TD>$building</TD>
	<TD>$room</TD>
	<TD>$bed</TD>
	<TD>$interviewee</TD>
	<TD>$approve</TD>
	<TD>$status</TD>
	<TD><A class=\"active2\" HREF='submit_admin_student.php?id=$id'>edit</A></TD>
</TR>";

}}
?>

</TABLE>





</form>

</div>

</body>
</html>
<?php }?>