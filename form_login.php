<?php session_start();
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
	.centered {
  			position: absolute;
    		top: 300px;
    		left: 730px;
    		width: 500px;
    		height: 700px;
			background-color: none;
	  	}
</style>
<meta charset="UTF-8">
<title>Form Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
<center><img src="กูทำ/slate-texture-background.jpg" width="1500" height="850" alt=""/></center>
<div class="centered">
	<table width="100%" height="15%" align="center" border="0" cellpadding="1" cellspacing="0">
  <tr>
    <td width="320" height="50" align="center" valign="middle" bgcolor="#f7971e">
		<strong><FONT Face="Cloud" size="5">Login Form </font></strong>
	</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#2E2E2E">      
        <form name="frmlogin"  method="post" action="login3.php">
        <p>&nbsp;</p>
			<p><FONT Face="Cloud Light" size="4" color="#FFFFFF">ชื่อผู้ใช้ :</font>
        <input  required name="id" type="text" size="12" maxlength="30" placeholder="Username"/>
        &nbsp; </p>
			<p><FONT Face="Cloud Light" size="4" color="#FFFFFF">รหัสผ่าน :</font>
        <input  required name="password" type="password" size="12" maxlength="30" placeholder="Password" />
        &nbsp;</p>
        <p><br/>
			<button type="submit" class="buttonn"><FONT Face="Cloud Light" size="3">Login</Font></button>
         &nbsp;&nbsp;
         <button type="reset" class="buttonn"><FONT Face="Cloud Light" size="3">Reset</Font></button>
         <br><br>
	    <label><a href="Register.php"><FONT Face="Cloud Light" size="3" color="#FF0004">Register</FONT></a></label>
        </form>  
     </td>
 </tr>
</table>
</div>
</body>
</html>