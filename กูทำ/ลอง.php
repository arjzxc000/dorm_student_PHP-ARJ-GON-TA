<!doctype html>
<?php
	require_once("connection.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Student_list</title>
<link href="../connection.php.css" rel="stylesheet" type="text/css">
<h1>UPDATE MEMBER</h1>
</head>

<body>
<?php
	$sql='SELECT * FROM dorm_student where id='$_SESSION["UserID"]'';
	$result=mysqli_query($db,$sql);
	{
		$id=$list["id"];
		$name=$list["name"];
		$email=$list["email"];
		$bed=$list["bed"];
		$room=$list["room"];
		$floor=$list["floor"];
		$building=$list["building"];
	    echo "$id : $name : $email : $bed : $room : $floor : $building <br>";
	
	}
		
?>

</body>
</html>

