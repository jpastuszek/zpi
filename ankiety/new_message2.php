<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$id_messages = (int)$_POST['id_message'];
	connect();
	$ret= -1; // nie ma upranień
	
	$result = mysql_query("select m.title, m.timestamp, m.body, u.email from messages m, users u where m.id_messages=$id_messages and m.id_reciver=".getId()." and u.id_users=m.id_sender");
	$row = mysql_fetch_array($result, MYSQL_BOTH);				
	if ($row)
	{		
?>
	Nowa wiadomość<br/><br/>
			<aside>
				<p><span>Odbiorca: </span><input type="text" id="reciver" size="70" value="<?php echo $row['email']; ?>"></p>
				<p><span>Tytuł: </span><input type="text" id="title" size="79" value="Re:<?php echo $row['title']; ?>"></p>														
			</aside>
			<aside>
			<section style="margin-top: 10px;" >			
			
				<textarea id="message_body" rows="15" cols="70" style="width: 100%">


------
<?php echo $row['timestamp']; ?>

------
<?php echo $row['body']; ?>
</textarea>
	
				<input id="send" type="submit" value="Wyślij" onClick="sendMessage()"/>
				
			</section>
			
			
<?php
	}
	else 
	{
		echo "Nie możesz odpowiadać na tą wiadomość.";	
	}
}
?>