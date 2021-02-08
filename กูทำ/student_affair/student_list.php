<!doctype html>
<?php
	require_once("connection.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Student_list</title>
</head>

<body>
<?php
	$sql="SELECT * FROM student";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result))
	{
		$student_id=$list["student_id"];
		$student_name=$list["student_name"];		
	    echo "$student_id : $student_name <a href='update_student.php?student_id=$student_id'>update</a> <br>";
	
	}
		
?>

</body>
</html>