<?php
	include_once "funkcje.php";
	start();
	if(isLogged())
	{		
		echo sendMessage($_POST['reciver'],$_POST['title'],$_POST['body']);
	} else echo -1000;
?>	