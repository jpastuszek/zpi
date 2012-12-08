<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$id_kierunek = (int)$_POST['id_kierunek'];
	$nazwa = addslashes($_POST['nazwa']);
	
	
	connect();				
	mysql_query("update kierunek set nazwa='$nazwa' where id_kierunek=".$id_kierunek);
	disconnect();	
	echo 1;
}
?>
