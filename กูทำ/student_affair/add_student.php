<?php
require_once("connection.php");
print_r($_GET);
    $student_id=$_GET['student_id'];
    $student_name=$_GET['student_name'];
    $gender=$_GET['gender'];
    $favorite_id=$_GET['favorite_id'];
    $fav_array=$_GET['fav_array'];
		
    $sql="INSERT INTO student() VALUES('$student_id','$student_name',$gender,$favorite_id)";
	//echo $sql; 
 	$result=mysqli_query($db,$sql);


     foreach($fav_array as $fav_id)
	 {
		 $sql="INSERT INTO student_favorite (student_id,favorite_id) VALUES('$student_id',$fav_id)";
		//echo $sql."\n"; 
 	$result=mysqli_query($db,$sql);
		 
	 }
	header('Location: student.php');
?>