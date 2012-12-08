<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$id_przedmiot = (int)$_POST['id_przedmiot'];
	$nazwa = addslashes($_POST['nazwa']);
	
	
	connect();				
	mysql_query("update przedmiot set nazwa='$nazwa' where id_przedmiot=".$id_przedmiot);
	disconnect();	
	echo 1;
}
?>
