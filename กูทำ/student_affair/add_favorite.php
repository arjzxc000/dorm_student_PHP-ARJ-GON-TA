<?php
require_once("connection.php");
//print_r($_GET);
    $faverite_name=$_GET['favorite_name'];
    $sql="INSERT INTO favorite(favorite_name) VALUES('$faverite_name')";
//	echo $sql; 
 	$result=mysqli_query($db,$sql);
	header('Location: favorite.php');
?>