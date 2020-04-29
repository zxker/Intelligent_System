<?php
	require_once 'connect.php';	
	$sql="update kk set status=1 where id= 1";

	if(mysql_query($sql) && mysql_affected_rows()==1){
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>location.href='$comewhere';</script>";
	}
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