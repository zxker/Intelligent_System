<?php
require_once 'connect.php';	
mysql_query("UPDATE kk SET a1 = 0 WHERE id = 1");
mysql_close($con);
$comewhere=$_SERVER['HTTP_REFERER'];
echo "<script language='javascript'>location.href='$comewhere';</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>