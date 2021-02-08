<?php

require_once("connection.php");
$fix_form_num=$_POST['fix_form_num'];
$fix_status=$_POST['status'];
$fix_status2=$_POST['status2'];
$technician_fix=$_POST['tech'];
if($_FILES["file"])
{
if ($_FILES["file"]["error"] > 0)
   {
   echo "Error: " . $_FILES["file"]["error"] . "<br>";
   if($_FILES["file"]["error"]==4) echo"No file upload";
   }
 else
   {
   echo "Upload: " . $_FILES["file"]["name"] . "<br>";
   echo "Type: " . $_FILES["file"]["type"] . "<br>";
   echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
   echo "Stored in: " . $_FILES["file"]["tmp_name"];

   
   // $fname=explode(".",$_FILES["file"]["name"]);

      $new_filename=$fix_form_num."".$_FILES["file"]["name"]; 
	 echo $new_filename;


       move_uploaded_file($_FILES["file"]["tmp_name"],
       "upload/" . $new_filename);
$query ="UPDATE fix_form SET fix_status='$fix_status',technician_fix='$fix_status2',fix_image2='$new_filename' WHERE fix_form_num='$fix_form_num' ";
mysqli_query($db,$query);
 }}

 $query ="UPDATE fix_form SET fix_status='$fix_status',technician_fix='$fix_status2' WHERE fix_form_num='$fix_form_num' ";

//echo $query;
mysqli_query($db,$query);

		
    
	header('Location: admin_fix.php');
?>