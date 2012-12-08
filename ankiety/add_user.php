<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {	
	$login = addslashes($_POST['login']);	
	$password = addslashes($_POST['password']);		
	
	connect();		
	$res = mysql_query("select count(*) from uzytkownik where login='$login'");
	$row = mysql_fetch_array($res, MYSQL_BOTH);
	if ($row[0]==0)	mysql_query("insert into uzytkownik(login,haslo) values('$login',md5('$password'))");
	else echo"-";
	

	disconnect();	
	echo 1;
}
?>
