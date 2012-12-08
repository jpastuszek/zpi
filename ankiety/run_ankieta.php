<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {	
	$id_ankieta = (int)$_POST['id_ankieta'];
	connect();
	mysql_query("update ankieta set status='Zbieranie' where id_ankieta=$id_ankieta");
	
	$result = mysql_query("select count(*) from mail where id_kierunek=(select id_kierunek from ankieta where id_ankieta=$id_ankieta)");
	$row = mysql_fetch_array($result, MYSQL_BOTH); 				
	$ile = $row[0];
	
	for(;$ile>0; $ile--)
	{
		mysql_query("insert into hash(id_ankieta,hash) values ($id_ankieta,md5('".($ile*43).time().time()."'))");
	}
	
	disconnect();
	echo 1;
	
	// tu też powinno być wysłanie na maila
	//mail (), bla bla bla
	
	
	
	
	}
	else 
	{
		echo "Nie możesz odpowiadać na tą wiadomość.";	
	}

?>