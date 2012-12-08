<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {	
	$nazwa = addslashes($_POST['nazwa']);	
		
	connect();		
	$res = mysql_query("select count(*) from wykladowca where nazwa='$nazwa'");
	$row = mysql_fetch_array($res, MYSQL_BOTH);
	if ($row[0]==0)	mysql_query("insert into wykladowca(nazwa) values('$nazwa')");
	else echo"-";
	disconnect();	
	echo 1;
}
?>
