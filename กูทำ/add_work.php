<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	fix type<select name="id_type"> 		
    
    <?php
	$sql="SELECT * FROM fixtype";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result)) /*ดึงข้อมูลมาทีละ row จนหมด ถึงจะจบลูปwhile*/
	{
		$id_type=$list["id_type"];
		$fix_type=$list["fix_type"];
		
		//echo" <input type='radio' name='favorite_id' value='$favorite_id'> $favorite_name<br>\n";
		
		echo"<option value='$id_type'> $fix_type</option>";
			
	}
	?>
	</select>
</body>
</html>