
<?php
require_once("connection.php");

date_default_timezone_set('Asia/Bangkok');
$date = date('m/d/Y h:i:s a', time());
$fix_form_num=$_GET['fix_form_num'];
$id=$_GET['id'];
$sql="UPDATE fix_form SET date_finish_fix='$date' WHERE fix_form_num='$fix_form_num' ";
$result=mysqli_query($db,$sql);
echo $sql;
echo "<script>";
echo "window.history.back()";
echo "</script>";
//header('Location: submit_admin_fix.php');
?>
