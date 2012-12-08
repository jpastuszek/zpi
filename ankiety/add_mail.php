<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {	
	$mail = addslashes($_POST['mail']);	
	$id_kierunek =$_POST['id_kierunek'];	
	
	connect();		
	$res = mysql_query("select count(*) from mail where mail='$mail'");
	$row = mysql_fetch_array($res, MYSQL_BOTH);
	if ($row[0]==0)	mysql_query("insert into mail(mail,id_kierunek) values('$mail',$id_kierunek)");
	else echo"-";
	disconnect();	
	echo 1;
}
?>
