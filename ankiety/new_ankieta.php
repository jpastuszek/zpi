<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {	
	connect();
	mysql_query("insert into ankieta(nazwa,od,status) values('Nowa ankieta',now(),'Robocza')");
	disconnect();
	echo 1;
	}
	else 
	{
		echo "Nie możesz odpowiadać na tą wiadomość.";	
	}

?>