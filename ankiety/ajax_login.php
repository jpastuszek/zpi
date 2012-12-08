<?php
	include_once "funkcje.php";
	start();
	
	login($_POST['login'],$_POST['password']);
	if(isLogged()) echo '1'; else echo '0';
?>	
