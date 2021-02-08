<!doctype html>
<?php
	require_once("connection.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$sql="SELECT * FROM favorite";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result))
	{
		$favorite_id=$list["favorite_id"];
		$favorite_name=$list["favorite_name"];		
	    echo "$favorite_id : $favorite_name <a href='delete_favorite.php?favorite_id=$favorite_id'>DELETE</a> <br>";
	
	}
		
?>
<form action="add_favorite.php" method="get">

	เพิ่มงานอดิเรก <input type="text" name="favorite_name"> 
	<input type="submit" value="ADD">
	
	
</form>	
	
</body>
</html>