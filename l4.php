<!doctype html>
<?php
	require_once("connection.php"); /*เชื่อมกับฐานข้อมูล*/
?>
<html>
<head>
<meta charset="utf-8">
<title>
<?php
	
	echo("This is poom's page");
?>
	
	</title>
</head>

<body>
<center><font color='#4CA729'>	hello world! <br>
	
<?php
	/*
	for($i=0;$i<10;$i++)
	{
	echo("This is poom's page<BR>\n");
	}
	*/
	
	
	
	
	
?>
	
	</font></center>
	<table width="500" border="1">
  <tbody>
    <tr>
      <td>Start of year</td>
      <td>Interest</td>
      <td>End of year</td>
    </tr>
<?php
	  /*
    <tr>
      <td>10000</td>
      <td>100</td>
      <td>10100</td>
    </tr>
	*/
?>
<?php	  
	  
	  $query ="INSERT INTO tbl_staff SET staff_id='$staff_id',staff_name='$staff_name',staff_password='$staff_password',staff_tel='$staff_tel'";

//echo $query;
mysqli_query($db,$query);
	  //$num_year=10;
	  if(isset($_GET['num_year']))
	  $num_year=$_GET['num_year'];
	  else $num_year=10;
	  
	  //$start_money=10000;
	  
	  if(isset($_GET['money']))
	  $start_money=$_GET['money'];
	  else $start_money=10000;
	  
	 
	  for($i=0;$i<$num_year;$i++)
	  {
		if($i%2==0) $bgcolor='#FFF000';
		  else $bgcolor='#00F0F0';
			  
	   $interrest=$start_money*0.01;
	   $end_money=$start_money*1.01;	  
		  
	  echo "	  
	  <tr bgcolor='$bgcolor'>
      <td> $start_money </td>
      <td> $interrest </td>
      <td> $end_money </td>
      </tr>
	  ";
		  
		  $start_money=$end_money;
	  }
?>
		  </tbody>
</table>

	
	
	
</body>
</html>
