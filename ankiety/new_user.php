<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {	
	
?>
			<aside>
				<p><span>Login: </span><input type="text" id="login" size="20" value=""></p>				
				<p><span>Nowe hasło: </span><input type="text" id="password" size="20"></p>		
						
			</aside>
			<aside>
			<section style="margin-top: 10px;" >			
				<input id="send" type="submit" value="Wyślij" onClick="addUser()"/>				
			</section>
			
		
<?php
	}
	else 
	{
		echo "Nie możesz odpowiadać na tą wiadomość.";	
	}

?>