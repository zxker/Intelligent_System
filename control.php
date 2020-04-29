<?php
header('Access-Control-Allow-Origin:*'); 
$one=$_REQUEST['one'];

$con = mysql_connect('qdm111422312.my3w.com', 'qdm111422312', 'wmn3256web');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("qdm111422312_db", $con);

// mysql_query("UPDATE ajax_demo SET Age = '{$one}'
// WHERE FirstName = 'Glen' AND LastName = 'Quag'");
mysql_query("UPDATE table SET status = '1' WHERE id = '1'");
mysql_close($con);
$comewhere=$_SERVER['HTTP_REFERER'];
echo "<script language='javascript'>alert('开启成功！');location.href='$comewhere';</script>";
?>