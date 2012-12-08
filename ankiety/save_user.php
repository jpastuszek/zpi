<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$id_uzytkownik = (int)$_POST['id_uzytkownik'];
	$login = addslashes($_POST['login']);
	$password = addslashes($_POST['password']);
	
	connect();			
	if ($password) mysql_query("update uzytkownik set login='$login', haslo=md5('$password') where id_uzytkownik=".$id_uzytkownik);
	else mysql_query("update uzytkownik set login='$login' where id_uzytkownik=".$id_uzytkownik);

	disconnect();	
	echo 1;
}
?>
