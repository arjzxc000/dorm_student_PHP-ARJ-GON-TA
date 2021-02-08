<!doctype html>
<?php
	require_once("connection.php"); /*เชื่อมกับฐานข้อมูล*/
	$student_id=$_GET['student_id'];

	$sql="SELECT * FROM student WHERE student_id='$student_id'";

	$result=mysqli_query($db,$sql);
	$list=mysqli_fetch_array($result);
	
		$student_id=$list["student_id"];
		$student_name=$list["student_name"];
		$gender=$list["gender"];
		$most_favorite_id=$list["most_favorite_id"];
		
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="submit_update_student.php" method="get">
	  <p>ID
  <input type="text" readonly name="student_id" value=<?php echo $student_id;?>  ><br>
	    ชื่อ <input type="text" name="student_name" value=<?php echo $student_name;?>><br>
	    
		  
		 ระบุเพศ <br>
		 
	    <input type="radio" name="gender" value="1" 
			   <?php if($gender==1)echo "checked";?>  >Male <br>
	    <input type="radio" name="gender" value="2" 
			   <?php if($gender==2)echo "checked";?> >Female <br>
	    <input type="radio" name="gender" value="3" <?php if($gender==3)echo "checked";?> >N/A <br>
	    
	    
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
		
		if($most_favorite_id==$favorite_id) $selected="selected";
		else $selected="";
		
		echo"<option value='$favorite_id' $selected> $favorite_name</option>";
			
	}
		
	?>
  </select> 
  </p>
	  <p><br><br>	
	    
	    เลือกที่จะติดตาม <br>	<?php
	
	//$sql="SELECT * FROM favorite";
	
		  $sql="SELECT favorite.favorite_id,favorite_name,student_id FROM favorite LEFT JOIN student_favorite ON favorite.favorite_id=student_favorite.favorite_id AND student_favorite.student_id='$student_id' ORDER BY favorite.favorite_id";
		 //echo $sql; 
		  $result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result))
	{
		$favorite_id=$list["favorite_id"];
		$favorite_name=$list["favorite_name"];
		$fav_student_id=$list["student_id"];
		
		if($fav_student_id==$student_id) $checked="checked";
		else $checked="";
		
		echo" <input type='checkbox' name='fav_array[]' value='$favorite_id' $checked > $favorite_name <br>\n";
		
	}
    
?>
	    
	    <input type="submit">
      </p>
	</form>
	
	
</body>
</html>