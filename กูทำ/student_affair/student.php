<!doctype html>
<?php
	require_once("connection.php"); /*เชื่อมกับฐานข้อมูล*/
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="add_student.php" method="get">
	  <p>ID
  <input type="text" name="student_id"><br>
	    ชื่อ <input type="text" name="student_name"><br>
	    ระบุเพศ	
	    <input type="radio" name="gender" value="1">Male <br>
	    <input type="radio" name="gender" value="2">Female <br>
	    <input type="radio" name="gender" value="3">N/A <br>
	    
	    
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
	    
	    เลือก favorite ที่จะเล่น 
  <select name="favorite_id"> 		
    
    <?php
	$sql="SELECT * FROM favorite";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result)) /*ดึงข้อมูลมาทีละ row จนหมด ถึงจะจบลูปwhile*/
	{
		$favorite_id=$list["favorite_id"];
		$favorite_name=$list["favorite_name"];
		
		//echo" <input type='radio' name='favorite_id' value='$favorite_id'> $favorite_name<br>\n";
		
		echo"<option value='$favorite_id'> $favorite_name</option>";
			
	}
		
	?>
  </select> 
  </p>
	  <p><br><br>	
	    
	    เลือกที่จะติดตาม <br>	<?php
	
	$sql="SELECT * FROM favorite";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result))
	{
		$favorite_id=$list["favorite_id"];
		$favorite_name=$list["favorite_name"];
		
		echo" <input type='checkbox' name='fav_array[]' value='$favorite_id' > $favorite_name <br>\n";
		
	}
    
?>
	    
	    <input type="submit">
      </p>
	</form>
	
	
</body>
</html>