<?php
	include "funkcje.php";
	start();
?>
<?xml version="1.0" encoding="utf-8" ?>
<wpisy>
<?php
	if (isLogged())
	{
		connect();		
		$result = mysql_query("select u.email, m.type, m.title, m.timestamp, m.id_sender, m.id_messages from messages m, users u where (m.type=1 or m.type=2) and m.id_sender=".getId()." and m.id_reciver=u.id_users order by timestamp DESC);
		while ($row = mysql_fetch_array($result, MYSQL_BOTH))		
		{	
			echo "<wpis>";
			echo "<tytul>".$row['title']."</tytul>";
			echo "<od>".$row['email']."</od>";
			echo "<data>".$row['timestamp']."</data>";	
			echo "<type>".$row['type']."</type>";
			echo "<id>".$row['id_messages']."</id>";
			echo "</wpis>";
		}	
		disconnect();
	}
?>
</wpisy>