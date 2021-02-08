<?php
require_once("connection.php");
$id=$_POST['id'];
$password=$_POST['password'];
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$address=$_POST['address'];
$building=$_POST['building'];
$room=$_POST['room'];
$bed=$_POST['bed'];
$interviewee=$_POST['interviewee'];
$approve=$_POST['approve'];
$status=$_POST['status'];

 $query ="UPDATE dorm_student SET id='$id',password='$password',name='$name',email='$email',tel='$tel',address='$address',building='$building',room='$room',bed='$bed',interviewee='$interviewee',approve='$approve',status='$status' WHERE id='$id' ";

//echo $query;
mysqli_query($db,$query);

		
    
	header('Location: admin_student.php');
?>