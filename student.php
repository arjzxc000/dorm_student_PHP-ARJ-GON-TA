<!doctype html>
<?php
	require_once("connection.php"); /*เชื่อมกับฐานข้อมูล*/
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<h1>ข้อมูลของนักเรียน</h1>
</head>

<body>
	<form action="add_room.php" method="get">
	  <p>
	   ชั้น <input type="text" name="floor"><br>
	 
	    
	    <?php
		/*
	$sql="SELECT * FROM favorite";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result)) //ดึงข้อมูลมาทีละ row จนหมด ถึงจะจบลูปwhile
	{
		$favorite_id=$list["favorite_id"];
		$favorite_name=$list["favorite_name"];
		
	echo" <input type='radio' name='favorite_id' value='$favorite_id'> $favorite_name<br>\n";
			
	}
		*/
	?>
	   
	    
	    <input type="submit">
      </p>
	</form>
	
	
</body>
</html>