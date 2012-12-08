<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$id_przedmiot = (int)$_POST['id_przedmiot'];
	connect();
	$ret= -1; // nie ma upranień
	
	$result = mysql_query("select * from przedmiot where id_przedmiot=$id_przedmiot");
	$row = mysql_fetch_array($result, MYSQL_BOTH);				
	if ($row)
	{		
?>
			<aside>
				<p><span>nazwa: </span><input type="text" id="nazwa" size="60" value="<?php echo $row['nazwa']; ?>"></p>								
			</aside>
			<aside>
			<section style="margin-top: 10px;" >						
				<input id="send" type="submit" value="Zapisz" onClick="savePrzedmiot(<?php echo $row['id_przedmiot']; ?>)"/>				
			</section>
			
			
<?php
	}
	else 
	{
		echo "Nie możesz odpowiadać na tą wiadomość.";	
	}
}
?>