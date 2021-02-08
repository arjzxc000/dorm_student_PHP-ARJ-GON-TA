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
<title>Form Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="Change Room/Change_room.php.css" rel="stylesheet" type="text/css">
</head>
<body>
	  <center><img src="Banner.jpg" width="1500" height="350" alt=""/></center>
	  <center><img src="WebBg.jpg" width="1500" height="1000" alt=""/></center>
	  
		<br><br><br>
   <div class="centered">
	<?php 
	   $message = $_SESSION['User']." ".$_SESSION['UserID']." LOGIN" ;?>
	<center><h1><FONT Face="Cloud" size="6"><?=$message?> </FONT></h1></center>
	<center><p><a href="logout.php"><FONT Face="Cloud Light" size="5">Log out</font></strong></a></p></center>
	<table width="550" border="0" align="center" cellpadding="3" cellspacing="10">
  <tr>
    <td height="25" align="center" class="bg_green"><strong><FONT Face="Cloud Light" size="4">สถานะปัจจุบัน : กำลังรอผลการลงทะเบียนจากสำนักงาน </FONT></strong></td>
  </tr>
</table>
	</div>

	

</body>
</html>