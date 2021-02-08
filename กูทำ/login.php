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
<form aciton="add_fix.php" method="get">
	ID&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
<input type="text" name="id_new"><br>
	Password : <input type="password" name="password_new"><br>
	<input type="submit" >
<?php
	$sql="SELECT * FROM application";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result))
	{
		$id_new=$list["id_new"];
		$password_new=$list["password_new"];		
	    echo "$id_new : $password_new  <br>";
	
	}
		
?>
</form>
</body>
</html>