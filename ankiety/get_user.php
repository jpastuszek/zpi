<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$id_users = (int)$_POST['id_users'];
	connect();
	$ret= -1; // nie ma upranień
	
	$result = mysql_query("select * from uzytkownik where id_uzytkownik=$id_users");
	$row = mysql_fetch_array($result, MYSQL_BOTH);				
	if ($row)
	{		
?>
			<aside>
				<p><span>Login: </span><input type="text" id="login" size="20" value="<?php echo $row['login']; ?>"></p>				
				<p><span>Nowe hasło: </span><input type="text" id="password" size="20"></p>						
			</aside>
			<aside>
			<section style="margin-top: 10px;" >						
				<input id="send" type="submit" value="Wyślij" onClick="saveUser(<?php echo $row['id_uzytkownik']; ?>)"/>				
			</section>
			
			
<?php
	}
	else 
	{
		echo "Nie możesz odpowiadać na tą wiadomość.";	
	}
}
?>