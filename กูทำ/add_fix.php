<?php

require_once("connection.php");
print_r($_GET);
$id_new=$_GET['id_new'];
$password_new=$_GET['password_new'];
$sql="INSERT INTO application(id_new,password_new) VALUES('$id_new','$password_new')";
echo $sql; 
$result=mysqli_query($db,$sql);
?>
