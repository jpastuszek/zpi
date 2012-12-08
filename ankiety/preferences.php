<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {

		connect();
		$mail = addslashes($email);
		$password = md5($password);
		$result = mysql_query("select * from users where id_users=".getId());
		$row = mysql_fetch_array($result, MYSQL_BOTH);		
		if ($row)
		{				
?>
			<aside>
				<p><span style="width:200px;">Czas odświeżania: </span><input type="text" id="refresh_time" size="3" value="<?php echo $row['refresh_time'];?>"> s (większe niż 29)</p>
				<p><span style="width:200px;">Wiadomości na stronę: </span><input type="text" id="page_limit" size="3" value="<?php echo $row['page_limit'];?>"> (większe niż 9)</p>														
				
			</aside>
			<aside>
			<section style="margin-top: 10px;" >			
				Podpis:
				<textarea id="signature" rows="3" cols="70" style="width: 100%"><?php echo $row['signature'];?></textarea>
	
				<input id="save" type="submit" value="Zapisz" onClick="savePreferences()"/>
				
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