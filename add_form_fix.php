<link href="connection.php.css" rel="stylesheet" type="text/css">
<?php session_start();
	require_once("connection.php");
?>
<?php
date_default_timezone_set('Asia/Bangkok');
$date = date('m/d/Y h:i:s a', time());
?>
<?php
$idd=$_SESSION["UserID"];
$fix_type=$_POST['fix_type'];
$time_interval=$_POST['time'];
$tel_fix=$_POST['tel_fix'];
$fix_detail=$_POST['fix_detail'];
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

      $new_filename=$idd."".$_FILES["file"]["name"]; 
	 echo $new_filename;


       move_uploaded_file($_FILES["file"]["tmp_name"],
       "upload/" . $new_filename);
 }}
$sql="INSERT INTO fix_form(id,date_request_fix,date_recieve_fix,fix_status,date_finish_fix,technician_fix,fix_type,time_interval,tel_fix,fix_detail,fix_image) VALUES('$idd','$date','-','0','-','-','$fix_type','$time_interval','$tel_fix','$fix_detail','$new_filename')";
$result=mysqli_query($db,$sql);

?>

<?php
		header("Location: form_fix.php");
?>