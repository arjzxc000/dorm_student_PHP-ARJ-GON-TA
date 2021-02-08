<?php session_start();
	require_once("connection.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php	$idd=$_SESSION["UserID"];
		$status=$_GET['status'];
		$query ="UPDATE dorm_student SET status='$status' ";
		mysqli_query($db,$query);
  		echo "<script>";
  		echo "window.history.back()";
  		echo "</script>";
	?>
</body>
</html>