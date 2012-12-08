<?php
 include_once "funkcje.php";
 start();
 if (isLogged()&&isAdmin())
 {
	$id_messages = (int)$_POST['id_messages'];
		
	connect();
	$ret= -1; // nie ma upranień
	
	$result = mysql_query("delete from messages where id_messages=$id_messages");	
	disconnect();
	echo 1;	
}
else 
{
echo -1;	
}
?>