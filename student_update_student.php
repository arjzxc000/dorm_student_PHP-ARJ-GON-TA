<?php session_start();
	require_once("connection.php");
$idd=$_SESSION["UserID"];
$password=$_POST['password'];
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$address=$_POST['address'];
 $query ="UPDATE dorm_student SET email='$email',tel='$tel',address='$address',name='$name',password='$password' WHERE id='$idd' ";

//echo $query;
mysqli_query($db,$query);
header('Location: personal_information.php');
?>