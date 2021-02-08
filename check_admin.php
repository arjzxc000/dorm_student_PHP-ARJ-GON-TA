<?php


if ($_SESSION['UserID']=="")
{
	
	header("refresh: 0; url=form_login.php");
}

else 
{

 $message=$_SESSION['UserID']." ".$_SESSION['User']." LOGIN";
}
?>