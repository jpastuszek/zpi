<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {	
	connect();
?>
			<aside>
				<p><span>Mail: </span><input type="text" id="mail" size="50" value=""></p>
				<p><span>Kierunek: </span><select id="id_kierunek"><?php kierunki(-1); ?></select></p>					
			</aside>
			<aside>
			<section style="margin-top: 10px;" >			
				<input id="send" type="submit" value="Dodaj" onClick="addMail()"/>				
			</section>
			
		
<?php
	disconnect();
	}
	else 
	{
		echo "Nie możesz odpowiadać na tą wiadomość.";	
	}

?>