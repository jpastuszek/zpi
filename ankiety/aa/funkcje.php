<?php
	function pol()
	{
		@mysql_connect('localhost', 'root', '');
		@mysql_select_db('ankiety');
	}

	function zam()
	{
		@mysql_close();		
	}
?>