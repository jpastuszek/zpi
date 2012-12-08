<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
	$id_wykladowca = (int)$_POST['id_wykladowca'];
	connect();
	$ret= -1; // nie ma upranień
	
	$result = mysql_query("select * from wykladowca where id_wykladowca=$id_wykladowca");
	$row = mysql_fetch_array($result, MYSQL_BOTH);				
	if ($row)
	{		
?>
			<aside>
				<p><span>nazwa: </span><input type="text" id="nazwa" size="60" value="<?php echo $row['nazwa']; ?>"></p>								
			</aside>
			<aside>
			<section style="margin-top: 10px;" >						
				<input id="send" type="submit" value="Zapisz" onClick="saveTeacher(<?php echo $row['id_wykladowca']; ?>)"/>				
			</section>
			
			
<?php
	}
	else 
	{
		echo "Nie możesz odpowiadać na tą wiadomość.";	
	}
}
?>