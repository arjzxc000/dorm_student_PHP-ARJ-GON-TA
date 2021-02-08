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
<?php	
	$idd=$_SESSION["UserID"];	
	$a=$_GET['a'];
	$sql="SELECT * FROM dorm_student where id='$idd'";
	$result=mysqli_query($db,$sql);
	$list=mysqli_fetch_array($result);
	$approve=$list["approve"];
	if ($approve=="P")
	{  
    if ($a==0) header("Location: ลองหน้าแรก.php");
	if ($a==1) header("Location: Change_room.php");
	if ($a==2) header("Location: form_fix.php");
	if ($a==3) header("Location: personal_information.php");
        }
		echo "<script>";
		echo "alert(\" ไม่สามารถทำรายการได้ในขณะนี้ เนื่องจากผลการลงทะเบียนยังไม่สำเร็จ \");";
  		echo "window.history.back()";
  		echo "</script>";
	
	?>
</body>
</html>