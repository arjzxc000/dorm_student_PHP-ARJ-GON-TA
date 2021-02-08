<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
echo"<table border=\"1\">";
$room2='ห้อง';
$j=201;
for ($k=1; $k <= 10; $k++) { 
echo"<tr>";
	for ($i=1; $i <= 3; $i++){
		$room3=$room2."".$j;
		echo"<td>";
		echo"<table border=\"1\">";
		echo"<tr><td colspan=\"2\" align=\"center\"><b>$room3</b></td></tr>";
		echo"<tr><td bgcolor='#74737a'>55</td>";
		echo"<td>55</td></tr>";
		echo"</table >";
		echo"</td>";
		$j++;
	}
echo"</tr>";
}
echo"</table >";
?>	
<body>
</body>
</html>