<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$id_wykladowca = (int)$_POST['id_wykladowca'];
	$nazwa = addslashes($_POST['nazwa']);
	
	
	connect();				
	mysql_query("update wykladowca set nazwa='$nazwa' where id_wykladowca=".$id_wykladowca);
	disconnect();	
	echo 1;
}
?>
