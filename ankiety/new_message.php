<?php
 include_once "funkcje.php";
 start();
 if (isLogged())
 {
?>
	Nowa wiadomość<br/><br/>
			<aside>
				<p><span>Odbiorca: </span><input type="text" id="reciver" size="70"></p>
				<p><span>Tytuł: </span><input type="text" id="title" size="79"></p>														
			</aside>
			<aside>
			<section style="margin-top: 10px;" >			
			
				<textarea id="message_body" rows="15" cols="70" style="width: 100%">

-----
<?php echo getSignature(); ?>
</textarea>
	
				<input id="send" type="submit" value="Wyślij" onClick="sendMessage()"/>
				
			</section>
			
			
<?php
}
else 
{
echo "dupa";	
}
?>