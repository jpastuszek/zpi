<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$id_mail = (int)$_POST['id_mail'];
	$id_kierunek = $_POST['id_kierunek'];
	$mail = addslashes($_POST['mail']);
	
	
	connect();				
	mysql_query("update mail set mail='$mail', id_kierunek=$id_kierunek where id_mail=$id_mail");
	disconnect();	
	echo 1;
}
?>
