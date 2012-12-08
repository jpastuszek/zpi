<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$id_messages = (int)$_POST['id_messages'];
		
	connect();
	$ret= -1; // nie ma upranień
	
	$result = mysql_query("select * from messages where id_messages=$id_messages and (id_reciver=".getId()." or id_sender=".getId().")");
	$row = mysql_fetch_array($result, MYSQL_BOTH);				
	if ($row)
	{
		if (getId() == $row['id_reciver']) setMessageType($id_messages,2);
?>
Wiadomość <br/><br/>
			<aside>
				<p><span>Odbiorca: </span><?php echo getEmail($row['id_reciver']);?></p>
				<p><span>Wysyłający: </span><?php echo getEmail($row['id_sender']);?></p>
				<p><span>Tytuł: </span><?php echo $row['title'];?></p>														
			</aside>
			<aside>
			<section style="margin-top: 10px;" >						
				<textarea id="message_body" rows="15" cols="70" style="width: 100%" readonly><?php echo $row['body'];?></textarea>
				<p><span style="background:#234" onClick="nowaWiadomosc2('<?php echo $id_messages; ?>')"><a href="#">Odpowiedz</a></span><span style="background:#234" onClick="nowaWiadomosc3('<?php echo $id_messages; ?>')"><a href="#">Prześlij dalej</a></span>
				<?php
				if (isAdmin())				
					echo '<span style="background:#234" onClick="usunWiadomosc('.$id_messages.')"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usuń</a></span>';								
				?>
				</p>				
			</section>
	
<?php		
	} 
	disconnect();
		
}
else 
{
echo "dupa";	
}
?>