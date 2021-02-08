<?php session_start();
	require_once("connection.php");
/*if(isset($_SESSION["name"]))
{
	$name=$_SESSION["name"];
}

else
{
		$name="no one ";
}
$url1=$_SERVER['REQUEST_URI'];
header("Refresh: ; URL=$url1");*/
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
		$status=$list["status"];

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
	<center>
		<b><u><FONT Face="Cloud" size="5" color="#DADADA">สถานะการเปลี่ยนเตียง</font></u></b><br>
	</center>
	<br>
	<?php
	if($status=="Y"){
		$bgcolor1='#f7971e';
		$bgcolor2='#74737a';
	}
	else{
		$bgcolor1='#74737a';
		$bgcolor2='#f7971e';
	}
		echo "<table width=\"97%\" border=\"0\" align=\"center\" cellpadding=\"10\" cellspacing=\"0\" bordercolor=\"#E8E8FF\">";
		echo"<tr>";
	echo  "<td width=\"485\" align=\"center\">";
	echo "<table  width=\"97%\" border=\"1\" align=\"center\" cellpadding=\"3\" cellspacing=\"0\">
									<tr><td colspan=\"2\" align=\"center\"><b>สถานะ</b></td></tr>";
	$status1='Y';$status2='N';
echo "	<tr height=\"50\"><td bgcolor='$bgcolor1' align=\"center\" width=\"50%\"><A HREF='change_ad.php?status=$status1'onclick=\"return confirm('Are you sure?');\">เปิดให้มีการเปลี่ยนเตียง</A></td>";
echo "	 <td bgcolor='$bgcolor2' align=\"center\" width=\"50%\"><A HREF='change_ad.php?status=$status2'onclick=\"return confirm('Are you sure?');\">ปิดสถานะเปลี่ยนเตียง</A></td></tr>";
	echo"</table >";
	echo"</td>";

echo"</tr>";
echo"</table>";?>
</div>
</body>
</html>