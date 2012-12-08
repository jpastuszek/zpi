<?php
	
	// funkcje baz danych
	
	function connect()
	{
		mysql_connect('localhost', 'root', '');
		mysql_select_db('ankiety');
	}

	function disconnect()
	{
		mysql_close();		
	}
	
	// start sesji
	function start()
	{
		if (!isset($_SESSION)) @session_start();
	}
	// koniec sesji
	function clear()
	{
		@session_unset();
		@session_destroy();
	}


	function login($login,$password)
	{
		connect();
		$login = addslashes($login);
		$password = md5($password);
		$result = mysql_query("select * from uzytkownik where login='$login' and haslo='$password'");
		$row = mysql_fetch_array($result, MYSQL_BOTH);		
		if ($row)
		{		
			$_SESSION['id'] = $row['id_uzytkownik'];
			$_SESSION['login'] = $row['login'];			

			mysql_query("update uzytkownik set ostatnio=now() where id_uzytkownik=".$_SESSION['id']);
		}
		disconnect();
	}
	
	function isLogged()
	{
		if(isset($_SESSION['id'])) return true; else return false;		
	}

	
	function kierunki($id)
	{
		$result = mysql_query("select * from kierunek");
		while ($row = mysql_fetch_array($result, MYSQL_BOTH))
		{
			echo '<option value="'.$row['id_kierunek'].'"'.($row['id_kierunek']==$id?"selected":"").'>'.$row['nazwa'].'</option>';
		}		
	}
	
	function kierunek($id)
	{
		$result = mysql_query("select * from kierunek where id_kierunek=$id");
		$row = mysql_fetch_array($result, MYSQL_BOTH);
		return $row['nazwa'];		
	}
	
	function wykladowcy()
	{
		$result = mysql_query("select * from wykladowca");
		while ($row = mysql_fetch_array($result, MYSQL_BOTH))
		{
			echo '<option value="'.$row['id_wykladowca'].'">'.$row['nazwa'].'</option>';
		}		
	}
	
	function przedmioty()
	{
		$result = mysql_query("select * from przedmiot");
		while ($row = mysql_fetch_array($result, MYSQL_BOTH))
		{
			echo '<option value="'.$row['id_przedmiot'].'">'.$row['nazwa'].'</option>';
		}		
	}
	
	