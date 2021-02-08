<?php
require_once("connection.php");
//print_r($_GET);
$floor=$_GET['floor'];
for($i=$floor*100+1;$i<$floor*100+26;$i++)
{
    //$floor=$_GET['floor'];
    
		
    $sql="INSERT INTO room (room_num,floor) VALUES($i,$floor)";
	echo $sql; 
 	$result=mysqli_query($db,$sql);

}
	//header('Location: student.php');
?>