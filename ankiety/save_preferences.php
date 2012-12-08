<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$refresh_time = (int)$_POST['refresh_time'] > 30 ? (int)$_POST['refresh_time'] : 30;
	$page_limit = (int)$_POST['page_limit'] > 10 ? (int)$_POST['page_limit'] : 10;
	$signature = addslashes($_POST['signature']);
	
	connect();		
	mysql_query("update users set refresh_time=$refresh_time, page_limit=$page_limit, signature='$signature' where id_users=".getId());
	disconnect();	
	echo 1;
}
?>
