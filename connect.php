<?php
	require_once('config.php');
	//Á¬¿â
	if(!($con = mysql_connect(HOST, USERNAME, PASSWORD))){
		echo mysql_error();
	}
	//Ñ¡¿â
	if(!mysql_select_db('chat')){
		echo mysql_error();
	}
	//×Ö·û¼¯
	if(!mysql_query('set names utf8')){
		echo mysql_error();
	}
?>