<!doctype html>
<?php
	require_once("Register/connection.php"); 
?>
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
<link href="กูทำ/style2.css" rel="stylesheet" type="text/css">
<link href="กูทำ/slate-texture-background.jpg.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<center><img src="กูทำ/slate-texture-background.jpg" width="1500" height="850" alt=""/></center>
<div class="centered">
	  <form action="add_register.php" method="get">
		<table width="100%" height="100%" align="center" border="0" cellpadding="1" cellspacing="0">	
  <tr>
    <td colspan="2" width="320" height="55" align="center" valign="middle" bgcolor="#f7971e" >
		<strong><FONT Face="Cloud" size="5">Register </font> </strong>
	</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#2E2E2E">      
		<p><FONT Face="Cloud" size="3" color=white>Student ID</font></p> 
	</td>
	<td align="center" valign="middle" bgcolor="#2E2E2E">
        <p>:<input  required name="id" type="text" size="12" maxlength="30" placeholder="Enter Student ID"/>
        &nbsp; </p>
	</td>
   </tr>
<tr>
    <td align="center" valign="middle" bgcolor="#2E2E2E">      
		<p><FONT Face="Cloud" size="3" color=white>Password</font></p> 
	</td>
	<td align="center" valign="middle" bgcolor="#2E2E2E">
        <p>:<input  required name="password" type="password" size="12" maxlength="30" placeholder="Enter Password"/>
        &nbsp; </p>
	</td>
   </tr>
<tr>
    <td align="center" valign="middle" bgcolor="#2E2E2E">      
		<p><FONT Face="Cloud" size="3" color=white>Name-Surname</font></p> 
	</td>
	<td align="center" valign="middle" bgcolor="#2E2E2E">
        <p>:<input  required name="name" type="text" size="12" maxlength="30" placeholder="Enter Name"/>
        &nbsp; </p>
	</td>
   </tr>
<tr>
    <td align="center" valign="middle" bgcolor="#2E2E2E">      
		<p><FONT Face="Cloud" size="3" color=white>E-mail</font></p> 
	</td>
	<td align="center" valign="middle" bgcolor="#2E2E2E">
        <p>:<input  required name="email" type="text" size="12" maxlength="30" placeholder="Enter E-mail"/>
        &nbsp; </p>
	</td>
   </tr>
<tr>
    <td align="center" valign="middle" bgcolor="#2E2E2E">      
		<p><FONT Face="Cloud" size="3" color=white>Tel</font></p> 
	</td>
	<td align="center" valign="middle" bgcolor="#2E2E2E">
        <p>:<input  required name="tel" type="text" size="12" maxlength="30" placeholder="Enter Tel"/>
        &nbsp; </p>
	</td>
   </tr>
<tr>
    <td align="center" valign="middle" bgcolor="#2E2E2E">      
		<p><FONT Face="Cloud" size="3" color=white>Address</font></p> 
	</td>
	<td align="center" valign="middle" bgcolor="#2E2E2E">
        <p>:<input  required name="address" type="text" size="12" maxlength="30" placeholder="Enter address"/>
        &nbsp; </p>
	</td>
   </tr>
<tr>
    <td align="center" valign="middle" bgcolor="#2E2E2E">      
		<p><FONT Face="Cloud" size="3" color=white>Building</font></p> 
	</td>
	<td align="center" valign="middle" bgcolor="#2E2E2E">
        <p>:<font color="#FFFFFF">:ชวนชื่น</color> 
        &nbsp; </p>
	</td>
   </tr>
<tr><td colspan="2" align="center" valign="middle" bgcolor="#2E2E2E"><button type="submit" class="buttonn"><FONT Face="Cloud" size="3">Regist</FONT></button></form></td>
	
</tr>
</table>
</div>
  


 

  


</body>
</html>
