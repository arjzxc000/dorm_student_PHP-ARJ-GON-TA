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
$bed=$list['bed'];
$interviewee=$list['interviewee'];
$approve=$list['approve'];
$status=$list['status'];

}






?>

<FORM METHOD=POST ACTION="admin_update_student.php">
<TABLE align="center" width="70%">
<tr>
	<td><br></td>
</tr>
<TR>
	<TD width="200"><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">id</font></strong></TD>
	<TD><INPUT class="select4" TYPE="text" NAME="id" value="<?php echo $id;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">password</font></strong></TD>
	<TD><INPUT class="select4" TYPE="text" NAME="password" value="<?php echo $password;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">name</font></strong></TD>
	<TD><INPUT class="select4" TYPE="text" NAME="name" value="<?php echo $name;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">email</font></strong></TD>
	<TD><INPUT class="select4" TYPE="text" NAME="email" value="<?php echo $email;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">tel</font></strong></TD>
	<TD><INPUT class="select4" TYPE="text" NAME="tel" value="<?php echo $tel;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">address</font></strong></TD>
	<TD><INPUT class="select4" TYPE="text" NAME="address" value="<?php echo $address;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">building</font></strong></TD>
	<TD><INPUT class="select4" TYPE="text" NAME="building" value="<?php echo $building;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">room</font></strong></TD>
	<TD><INPUT class="select4" TYPE="text" NAME="room" value="<?php echo $room;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">bed</font></strong></TD>
	<TD><INPUT class="select4" TYPE="text" NAME="bed" value="<?php echo $bed;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">interviewee</font></strong></TD>
	<TD><INPUT class="select4" TYPE="text" NAME="interviewee" value="<?php echo $interviewee;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">approve</font></strong></TD>
	<TD><input type="radio" name="approve" value="Pass" 
			   <?php if($approve=='P')echo "checked";?>  ><font face="Cloud">Pass </font><br>
	    <input type="radio" name="approve" value="Fail" 
			   <?php if($approve=='F')echo "checked";?> ><font face="Cloud">Fail </font><br></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<TR>
	<TD><strong><FONT Face="Cloud Light" size="5" color="#FFFFFF">status</font></strong></TD>
	<TD><INPUT class="select4" TYPE="text" NAME="status" value="<?php echo $status;?>"></TD>
</TR>
<tr>
	<td><br></td>
</tr>
<tr>
	<td><input class="buttonn" type="submit" name="btnSubmit" style="width:100px; height:50px;" value="Edit"/></td>
</tr>


</TABLE>






</FORM>
		</div>

</body>
</html>
<?php ?>