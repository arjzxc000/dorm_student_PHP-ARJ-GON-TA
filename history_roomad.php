<?php session_start();
require_once("connection.php");
?>

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
		
?>
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
<div class="IDicon">
	<img src="Icon ID.png" height="60" width="60">
</div>
<div class="nameicon">
	<img src="Icon person.png" height="60" width="60">
</div>
<div class="ID">
	<b><FONT Face="Cloud" size="5"><?php echo "$id"?></font></b>
</div>
<div class="name">
	<b><FONT Face="Cloud" size="5"><?php echo "$name"?></font></b>
</div>
<div class="content">
	<br>
</div></div>
<div class="contenttext">
	<form action="history_roomad.php" method="get">
	<center>
		<b><u><FONT Face="Cloud" size="5" color="#DADADA"><?php
	echo "ประวัติย้ายเตียง";?><br><br></font></u></b><br>
	</center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบุ
	<input type="radio" name="choice" value="1">id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="choice" value="2">ห้องที่เคยอยู่ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="choice" value="3">แสดงทั้งหมด &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="answer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit"><br><br><br>
	<?php
	if(isset($_GET["choice"])){
		$choice=$_GET["choice"];
		if($choice==1){
		$id2=$_GET["answer"];	
	echo"<TABLE width=\"90%\"  align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"0\">";
    echo"<TR height=\"50\">";
	echo"<TD bgcolor=\"#f7971e\" width=\"10%\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">change_form_id</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">id</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">วันที่ย้ายเข้า</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">วันที่ย้ายออก</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">ห้องเก่า</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">เตียงเก่า</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">ห้องใหม่</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">เตียงใหม่</font></strong></TD>";
    echo"</TR>";
	$sql = "SELECT * FROM change_room WHERE id='$id2' ";
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

}
			
		}if($choice==2){
	$id2=$_GET["answer"];	
	echo"<TABLE width=\"90%\"  align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"0\">";
    echo"<TR height=\"50\">";
	echo"<TD bgcolor=\"#f7971e\" width=\"10%\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">change_form_id</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">ห้อง</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">เตียง</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">วันที่ย้ายเข้า</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">วันที่ย้ายออก</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">id</font></strong></TD>";
    echo"</TR>";
	$sql = "SELECT * FROM change_room WHERE room_new='$id2' ";
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
	<TD>$id2</TD>
	<TD>$bed_new</TD>
	<TD>$date_change_room</TD>
	<TD>$date_out</TD>
	<TD>$id</TD>
</TR>";

}
			
		}if($choice==3){
			echo"<TABLE width=\"90%\"  align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"0\">";
echo"<TR height=\"50\">";
	echo"<TD bgcolor=\"#f7971e\" width=\"10%\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">change_form_id</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">id</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">วันที่ย้าย</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">ห้องเก่า</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">เตียงเก่า</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">ห้องใหม่</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">เตียงใหม่</font></strong></TD>";
echo"</TR>";
	$sql = "SELECT * FROM change_room ";
	$result = mysqli_query($db,$sql);
	 while($list = mysqli_fetch_array($result))
	 {
$change_form_id=$list['change_form_id'];
$id=$list['id'];
$date_change_room=$list['date_change_room'];
$room_old=$list['room_old'];
$bed_old=$list['bed_old'];
$room_new=$list['room_new'];
$bed_new=$list['bed_new'];
echo"
<TR height=\"50\">
	<TD>$change_form_id</TD>
	<TD>$id</TD>
	<TD>$date_change_room</TD>
	<TD>$room_old</TD>
	<TD>$bed_old</TD>
	<TD>$room_new</TD>
	<TD>$bed_new</TD>
</TR>";

}
		}
	}
	else{
	echo"<TABLE width=\"90%\"  align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"0\">";
echo"<TR height=\"50\">";
	echo"<TD bgcolor=\"#f7971e\" width=\"10%\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">change_form_id</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">id</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">วันที่ย้าย</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">ห้องเก่า</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">เตียงเก่า</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">ห้องใหม่</font></strong></TD>";
	echo"<TD bgcolor=\"#f7971e\"><strong><FONT Face=\"Cloud\" size=\"4\" color=\"000000\">เตียงใหม่</font></strong></TD>";
echo"</TR>";
	$sql = "SELECT * FROM change_room ";
	$result = mysqli_query($db,$sql);
	 while($list = mysqli_fetch_array($result))
	 {
$change_form_id=$list['change_form_id'];
$id=$list['id'];
$date_change_room=$list['date_change_room'];
$room_old=$list['room_old'];
$bed_old=$list['bed_old'];
$room_new=$list['room_new'];
$bed_new=$list['bed_new'];
echo"
<TR height=\"50\">
	<TD>$change_form_id</TD>
	<TD>$id</TD>
	<TD>$date_change_room</TD>
	<TD>$room_old</TD>
	<TD>$bed_old</TD>
	<TD>$room_new</TD>
	<TD>$bed_new</TD>
</TR>";

}}?>
</TABLE>
</form>		
</div>
</body>
</html>
<?php }?>