<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {	
	
?>
			<aside>
				<p><span>Nazwa: </span><input type="text" id="nazwa" size="50" value=""></p>														
			</aside>
			<aside>
			<section style="margin-top: 10px;" >			
				<input id="send" type="submit" value="Dodaj" onClick="addPrzedmiot()"/>				
			</section>
			
		
<?php
	}
	else 
	{
		echo "Nie możesz odpowiadać na tą wiadomość.";	
	}

?>