<?php
// header('Access-Control-Allow-Origin:*'); 
// $led=$_REQUEST['led'];

$con = mysql_connect('qdm111422312.my3w.com', 'qdm111422312', 'wmn3256web');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("qdm111422312_db", $con);
// $result = mysql_query("SELECT * FROM smart_home ORDER BY control");
$LED = mysql_query("SELECT * FROM smart_home WHERE id='1'");
$DOOR = mysql_query("SELECT * FROM smart_home WHERE id='2'");
$TV = mysql_query("SELECT * FROM smart_home WHERE id='3'");
$col1 = mysql_fetch_array($LED);
$col2 = mysql_fetch_array($DOOR);
$col3 = mysql_fetch_array($TV);

 
echo '{"LED":"'.$col1['control'].'","DOOR":"'.$col2['control'].'","TV":"'.$col3['control'].'"}';

mysql_close($con);
?>