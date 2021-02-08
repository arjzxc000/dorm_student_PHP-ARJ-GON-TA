<!doctype html>
<html>
<head>
<?php	

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

   
      //$fname=explode(".",$_FILES["file"]["name"]);

      //$new_filename=$fid.".".$fname[1]; 

      $new_filename=$_FILES["file"]["name"];
       move_uploaded_file($_FILES["file"]["tmp_name"],
       "upload/" . $new_filename);

   
//$query="UPDATE tbl_goods SET filename='$new_filename' WHERE goods_id='$fid'" ;
//echo $query;
	//mysqli_query($db,$query);
	

   }
}

else 
{
	echo "no file";
}

?>
	
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>