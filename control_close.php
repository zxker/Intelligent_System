<?php
@$one=$_REQUEST['one'];

$con = mysql_connect('qdm111422312.my3w.com', 'qdm111422312', 'wmn3256web');
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("qdm111422312_db", $con);

// mysql_query("UPDATE ajax_demo SET Age = '{$one}'
// WHERE FirstName = 'Glen' AND LastName = 'Quag'");
mysql_query("UPDATE kk SET status = 0 WHERE id = '1'");
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