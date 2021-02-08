<?php
require_once("connection.php");
//print_r($_GET);
    $favorite_id=$_GET['favorite_id'];
    $sql="DELETE FROM favorite WHERE favorite_id=$favorite_id";
//	echo $sql; 
 	$result=mysqli_query($db,$sql);
	header('Location: favorite.php');
?>