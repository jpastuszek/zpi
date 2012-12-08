<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$id_mail = (int)$_POST['id_mail'];
	connect();
	$ret= -1; // nie ma upranień
	
	$result = mysql_query("select * from mail where id_mail=$id_mail");
	$row = mysql_fetch_array($result, MYSQL_BOTH);				
	if ($row)
	{		
?>
			<aside>
				<p><span>Kierunek: </span><select id="id_kierunek"><?php kierunki((int)$row['id_kierunek']); ?></select></p>								
				<p><span>Mail: </span><input type="text" id="mail" size="30" value="<?php echo $row['mail']; ?>"></p>								
			</aside>
			<aside>
			<section style="margin-top: 10px;" >						
				<input id="send" type="submit" value="Zapisz" onClick="saveMail(<?php echo $row['id_mail']; ?>)"/>				
			</section>
			
			
<?php
	}
	else 
	{
		echo "Nie możesz odpowiadać na tą wiadomość.";	
	}
}
?>