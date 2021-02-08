<?php
session_start();

if(isset($_SESSION["name"]))
{
	$name=$_SESSION["name"];
}

else
{
	if(isset($_GET["name"]))
	{
     $name=$_GET["name"];
	 $_SESSION["name"]=$name;	
	}
	else
	{
		$name="no one ";
	}
}


if(isset($_GET["status"]))
{
	if($_GET["status"]=="logout")
	{
		session_destroy();
	$name="no one ";
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php echo "$name is logging in now";
	?>
	
	<form action="session_test.php" method="GET">
		
		ใส่ชื่อ <input type="text" name="name">
	
		<input type="submit">
	</form>
	
	<a href="session_test.php?status=logout">LOGOUT</a>
</body>
</html>