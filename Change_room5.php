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
		$bed=$list["bed"];
		$room=$list["room"];
		$floor=$list["floor"];
		$building=$list["building"];
		$email=$list["email"];
	    $status=$list["status"];
	}
		
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
<div class="building2">
	<b><FONT Face="Cloud" size="5"><a class="active"href='history_room.php'>ประวัติการย้ายเตียง</a></font></b>
</div>
<div class="content">
	<br>
</div></div>
<div class="contenttext">
	<center>
		<b><u><FONT Face="Cloud" size="5" color="#DADADA"><?php
	if($status!="N"){
	echo "กรุณาเลือกห้องที่ต้องการ";}
	else{echo "ยังไม่อนุญาตให้เปลี่ยนเตียง";}?></font></u></b><br>
	</center>
	<br>
		<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0">
			<tr>
				<td height="30" width="90%"align="center">ตึกชวนชม ชั้นที่ : 
				<a class="active"href='Change_room.php'>2</a>
				<a class="active"href='Change_room2.php'>3</a>
				<a class="active"href='Change_room3.php'>4</a>
				<a class="active"href='Change_room4.php'>5</a>
				<a class="active"href='Change_room5.php'>6</a></td>
			</tr>
		</table><br>
	<?php
		echo "<table width=\"97%\" border=\"0\" align=\"center\" cellpadding=\"10\" cellspacing=\"0\" bordercolor=\"#E8E8FF\">";
		$room2='ห้อง';
		$j=601;
for ($k=1; $k <= 10; $k++) { 
echo"<tr>";
	for ($i=1; $i <= 3; $i++){
	if($j==626) return;
	$room3=$room2."".$j;
	echo  "<td width=\"485\" align=\"center\">";
	echo "<table  width=\"97%\" border=\"1\" align=\"center\" cellpadding=\"3\" cellspacing=\"0\">
									<tr><td colspan=\"2\" align=\"center\"><b>$room3</b></td></tr>";
	$bed1='A';$bed2='B';
	$query ="SELECT * FROM dorm_student WHERE room='$j' and bed='$bed1'";
	$result=mysqli_query($db,$query);
	if($list=mysqli_fetch_array($result)){$bgcolor='#74737a';echo "<tr height=\"50\"><td bgcolor='$bgcolor' align=\"center\"> A </td>";}
	else {
		$bgcolor='#f7971e';
		if($status!="N"){
		  echo "	<tr height=\"50\"><td bgcolor='$bgcolor' align=\"center\" width=\"50%\"><A HREF='change.php?room=$j&amp;bed=$bed1'onclick=\"return confirm('Are you sure?');\">A</A></td>";}
		else{echo "	<tr height=\"50\"><td bgcolor='$bgcolor' align=\"center\" width=\"50%\">A</td>";}
		}
	$query ="SELECT * FROM dorm_student WHERE room='$j' and bed='$bed2'";
	$result=mysqli_query($db,$query);
	if($list=mysqli_fetch_array($result)){$bgcolor='#74737a';echo "<td bgcolor='$bgcolor' align=\"center\"> B </td></tr>";}
	else {
		$bgcolor='#f7971e';
		if($status!="N"){
			echo "	 <td bgcolor='$bgcolor' align=\"center\" width=\"50%\"><A HREF='change.php?room=$j&amp;bed=$bed2'onclick=\"return confirm('Are you sure?');\">B</A></td></tr>";}
		else{echo "	<td bgcolor='$bgcolor' align=\"center\"  width=\"50%\"> B </td></tr>";}
		}
	echo"</table >";
	echo"</td>";
	$j++;}
echo"</tr>";}
echo"</table>";?>
</div>
</body>
</html>